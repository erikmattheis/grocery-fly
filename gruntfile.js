module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    watch: {
      css: {
        files: ['css/main.scss', 'css/scss-partials/*.scss'],
        tasks: ['sass']
      },
      javascript: {
        files: ['js/**/*.js'],
        tasks: ['uglify']
      }
    },

    sass: {
      dist: {
        files: {
          'css/styles.min.css': 'css/main.scss'
        }
      }
    },

    uglify: {
      options: {
        mangle: false,
        compress: false,
        beautify: true
      },
      build: {
        src : ['js/scripts.js'],
        dest : 'js/site.min.js'
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  grunt.registerTask('default', ['watch', 'sass', 'uglify']);

};

