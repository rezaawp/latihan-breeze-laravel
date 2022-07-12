import React from "react";
import { Link } from "@inertiajs/inertia-react";

const Data = ({news}) => {
    return news.map((data, i) =>
        <tr>
            <th>{ ++i }</th>
            <td>{data.title}</td>
            <td>{data.description}</td>
            <td>{data.author}</td>
            <td><Link href={`delete/${data.id}`} className="btn btn-error">Hapus</Link>
            <Link href="" className="btn btn-warning mx-2">Get Data</Link></td>
        </tr>
    )
}

export default Data