module.exports = {
  react: 'src/react-bundle.js',
  ssr_hello: 'src/page/hello/app/server',
  hello: [
    'webpack/hot/dev-server',
    'webpack-hot-middleware/client',
    'src/page/hello/app/client',
  ],
};
