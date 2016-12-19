import React, { Component } from 'react';
import HelloWorld from '../containers/HelloWorld';

// const App = () => (
//   <div>
//     <Hello />
//   </div>
// );

// import HelloWorld from '../containers/HelloWorld';

// const App = () => (
//   <div>
//     <div>cccd</div>
//   </div>
// );
//
// export default App;

export default class App extends Component {
  render() {
    return (<div>hoge</div>);
  }
}

if (module.hot) {
  module.hot.accept();
}

// export default App;
