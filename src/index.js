import React from 'react';
import App from './App';
import './index.css';
// import './style.css';
import reportWebVitals from './reportWebVitals';
import {Provider} from './Components/Context'
import {createRoot} from 'react-dom/client'
const container = document.getElementById('root')
const root = createRoot(container)



root.render(
  <React.StrictMode>
  <Provider>
    <App />
  </Provider>
    
  </React.StrictMode>
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
