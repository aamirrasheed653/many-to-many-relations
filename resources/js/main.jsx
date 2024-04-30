import React from 'react';
import ReactDOM from 'react-dom/client';
import { RouterProvider } from 'react-router-dom';
import router from './router/Routers';

if (document.getElementById('main')) {
    const Index = ReactDOM.createRoot(document.getElementById("main"));

    Index.render(
        <React.StrictMode>
            <RouterProvider router={router} />
        </React.StrictMode>
    )
}
