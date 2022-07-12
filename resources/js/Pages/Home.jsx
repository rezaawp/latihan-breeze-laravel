import React from "react";
import { Link } from "@inertiajs/inertia-react";
import { useState } from "react";
import { Inertia } from "@inertiajs/inertia";

const Home = (props) => {
    console.log(props)
    const edit = props.edit;
    const [values, setValues] = useState({
        title: "",
        description: "",
        author: "",
      })
     
      function handleChange(e) {
        const key = e.target.id;
        const value = e.target.value
        setValues(values => ({
            ...values,
            [key]: value,
        }))
      }
    
      function handleSubmit(e) {
        e.preventDefault()
        Inertia.post('/user', values)
        values.title = ""
        values.description = ""
        values.author = ""
      }
    
      return (
        <div>
          <table>
            <label htmlFor="title">Title : </label>
            <input className="input input-bordered input-info w-full max-w-xs mb-2" id="title" value={values.title} onChange={handleChange} /> <br />
            <label htmlFor="description">Desc : </label>
            <input className="input input-bordered input-info w-full max-w-xs mb-2" id="description" value={values.description} onChange={handleChange} /> <br />
            <label htmlFor="author">Author : </label>
            <input className="input input-bordered input-info w-full max-w-xs mb-2" id="author" value={values.author} onChange={handleChange} /> <br /> <br />
            <button className = "btn btn-success" type="submit" onClick={handleSubmit}>Submit</button>
            <button className="btn btn-warning mx-2">Update</button>
          </table>
        </div>
      )
    
}

export default Home