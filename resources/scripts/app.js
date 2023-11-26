import domReady from '@roots/sage/client/dom-ready';
import MyComponent from './ReactComponent.js';
import ReactDOM from 'react-dom';
/**
 * Application entrypoint
 */
domReady(async() => {
    let element = document.querySelector('.headers');
    if (element && element.classList.contains('active')) {
        const {default: Headers} = await import('./atoms/headers.js');

        new Headers();
    }

    let element2 = document.querySelector('.example');
    if (element2 && element2.classList.contains('active')) {
        const {default: Example} = await import('./atoms/example.js');

        new Example();
    }

    ReactDOM.render(<MyComponent />, document.getElementById('react-root'));

});

/**x
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) {
    import.meta.webpackHot.accept(console.error);
}
