const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
  .webpackConfig(require('./webpack.config'))
  .js('resources/js/app.js', 'public/js')
  .js('resources/js/dashboard.js', 'public/js')
  .postCss('resources/css/app.css', 'public/css', [
      require('postcss-import'),
      require('tailwindcss'),
  ]);
  // .webpackConfig({
  //     resolve: {
  //         alias: {
  //             ziggy: path.resolve('vendor/tightenco/ziggy/dist'),
  //         },
  //     },
  // })
  // .webpackConfig(require('./webpack.config'));
  // .version();
  // .sourceMaps();
