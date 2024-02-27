// If you are using JavaScript/ECMAScript modules:
//import Dropzone from "dropzone";

// If you are using CommonJS modules:
//const { Dropzone } = require("dropzone");

let myDropzone  = new Dropzone("#my-awesome-dropzone");

myDropzone  = ("#my-awesome-dropzone", { 
    dictDefaultMessage: 'Sube aqui tu imagen',
    acceptedFiles: ".png,.jpg,.jpge,.gif",
    addRemoveLinks: true,
    dictRemoveFile: "Borrar Archivo",
    maxFiles: 1,
    uploadMultiple: false,  
});


// let myDropzone  = new Dropzone("#my-awesome-dropzone", { 
//     dictDefaultMessage: 'Sube aqui tu imagen',
//     acceptedFiles: ".png,.jpg,.jpge,.gif",
//     addRemoveLinks: true,
//     dictRemoveFile: "Borrar Archivo",
//     maxFiles: 1,
//     uploadMultiple: false,  
// });