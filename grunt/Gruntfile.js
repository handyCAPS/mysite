/*global module:false*/
module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    // Metadata.
    pkg: grunt.file.readJSON('package.json'),
    banner: '/*! <%= pkg.title || pkg.name %> - v<%= pkg.version %> - ' +
      '<%= grunt.template.today("yyyy-mm-dd") %>\n' +
      '<%= pkg.homepage ? "* " + pkg.homepage + "\\n" : "" %>' +
      '* Copyright (c) <%= grunt.template.today("yyyy") %> <%= pkg.author.name %>;' +
      ' Licensed <%= _.pluck(pkg.licenses, "type").join(", ") %> */\n',
    wpFolder: '<%= pkg.wp.folder %>',
    wpRemote: '<%= pkg.wp.remote %>',
    wpPluginFolder: '<%= pkg.wp.pluginFolder %>',

    // Task configuration.
    concat: {
      // All the files written by me
      all: {
        src: ['../lib/js/**/*.js'],
        dest: '../lib/proc/js/tim.concat.js'
      },
      // Files needed for localScroll to work
      localScroll: {
        src: ['../bower_components/jquery.scrollTo/jquery.scrollTo.min.js', '../bower_components/jquery.localScroll/jquery.localScroll.min.js'],
        dest: '../lib/vendor/js/localScroll.concat.min.js'
      },
      // Copying jquery to vendor dir
      jquery: {
        src: ['../bower_components/jquery/dist/jquery.min.js'],
        dest: '../lib/vendor/js/jquery.min.js'
      }
    },
    // Uglify is only needed for distribution
    uglify: {
      options: {
        preserveComments: false,
        banner: '<%= banner %>'
      },
      dist: {
        src: '<%= concat.all.dest %>',
        dest: '../dist/js/<%= pkg.name %>.min.js'
      }
    },
    jshint: {
      options: {
        devel: true,
        curly: true,
        eqeqeq: true,
        immed: true,
        latedef: true,
        newcap: true,
        noarg: true,
        sub: true,
        undef: true,
        unused: true,
        boss: true,
        eqnull: true,
        browser: true,
        jquery: true,
          globals: {
            jQuery: true,
            require: true
          }
      },
      gruntfile: ['Gruntfile.js'],
      lib: ['../lib/js/**/*.js']
    },
    sass: {
      dev: {
        options: {
          debugInfo: true,
          compass: true
        },
        files: [{
          expand: true,
          cwd: '../lib/scss',
          src: '**/*.scss',
          dest: '../lib/css',
          ext: '.css'
        }]
      },
      dist: {
        options: {
          style: 'compressed',
          compass: true,
          banner: '<%= banner %>'
        },
        files: [{
          expand: true,
          cwd: '../lib/scss',
          src: '**/*.scss',
          dest: '../dist/css',
          ext: '.min.css'
        }]
      }
    },
    autoprefixer: {
      dev: {
        expand: true,
        src: '../lib/css/**/*.css'
      },
      dist: {
        expand: true,
        src: '../dist/css/**/*.css'
      }
    },
    watch: {
      options: {
        livereload: true
      },
      sass: {
        files: '../lib/**/*.scss',
        tasks: ['sass:dev', 'autoprefixer:dev'],
        options: {
          spawn: false
        }
      },
      js: {
        files: '../lib/js/**/*.js',
        tasks: ['concat','jshint:lib'],
        options: {
          spawn: false
        }
      },
      grunt: {
        files: 'Gruntfile.js',
        tasks: ['jshint:gruntfile']
      }
    }

  });

  // Autoloading all dev dependencies
  require('load-grunt-tasks')(grunt);

  // Default task.
  grunt.registerTask('default', ['jshint', 'concat', 'uglify', 'sass', 'autoprefixer']);

  grunt.registerTask('dist', ['jshint:lib', 'concat', 'uglify', 'sass:dist', 'autoprefixer:dist']);

};
