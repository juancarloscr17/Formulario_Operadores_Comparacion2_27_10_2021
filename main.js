addEventListener("DOMContentLoaded",async()=>{
    let data ={
        numero1 :10,
        numero2  :11
    };
    let peticio = await fetch("https://juancarloscr17.000webhostapp.com/Formulario_Operadores_Comparacion2_27_10_2021/api.php", {method: "POST", body: JSON.stringify(data)});
    let json = await peticio.text();
    console.log(json);
    document.body.insertAdjacentText("beforeend",json);

});