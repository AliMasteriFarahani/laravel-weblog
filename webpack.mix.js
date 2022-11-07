const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//    .sass('resources/sass/app.scss', 'public/css');

mix.styles([
   'resources/admin/css/font-awesome.min.css',
   'resources/admin/css/simple-line-icons.min.css',
   'resources/admin/dist/style.css',
   'resources/admin/dist/style-custom.css',
],'public/css/all.css');

mix.scripts([
   // 'resources/js/app.js',
   'resources/admin/js/libs/jquery.min.js',
   'resources/admin/js/libs/bootstrap.min.js',
   'resources/admin/js/libs/pace.min.js',
   'resources/admin/js/libs/Chart.min.js',
   'resources/admin/js/app.js',
   'resources/admin/js/views/main.js',
],'public/js/all.js');
