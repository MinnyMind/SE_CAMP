<table>
    <tbody>
        <body>
            <center>
                <h1>Enter number for multiplication table</h1>
            <form method="post" action="/my-route">
                @csrf
                <input type="text" name="number">
                <button type="submit">Submit</button>
            </form>
        </center></body>
    </tbody>
</table>
<style>
    h1{
        font-family: monospace;
        font-size: 30px;
    }
    body{
        background-color: rgba(228, 154, 101, 0.646);

}
</style>

