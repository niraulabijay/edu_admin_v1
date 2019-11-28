import React,{ Component } from "react";
import ReactDOM from "react-dom";

export default class Index extends Component{
    render() {
        return(
            <div>
                <span>hello</span>
            </div>
        );
    }
}

if (document.getElementById('new-root')) {
    ReactDOM.render(<Index />, document.getElementById('new-root'));
}
