import React from "react";
import Home from "./Home";
import Data from "./Data";

const About = (props) => {
    console.log(props)
    return (
        <div>
            <Home />
            <div className="overflow-x-auto">
            <table className="table w-full">
                <thead>
                <tr>
                    <th></th>
                    <th>Title</th>
                    <th>Desc</th>
                    <th>Author</th>
                    <th>Action</th>
                </tr>
                </thead>
                <Data news={props.news} /> 
            </table>
            </div>
        </div>
    )
}

export default About