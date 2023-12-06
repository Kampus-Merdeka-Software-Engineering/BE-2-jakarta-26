import express, { response }  from "express";

const app = express();
const port = 3000;

app.get('/' (request, response)  => {
    response.status(200).json({
        data: {},
        message: "succesfully retrieved data",
    });
    
}); 



app.listen(port, ()=> {
    console.log(`Server is running at port ${port}`)
});
