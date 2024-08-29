const formulario = document.querySelector("form")
formulario.addEventListener("sumit", (evento) => {
    evento.preventDefault()
    fetch("querymica.php", {
        method: "POST",
        body: datos
    }).then(
        /* cabecera => { console.log("ver qye tiene: ", cabecera); } */
        function (cabecera) {
            console.log(cabecera);
            return cabecera.json()
        }
    ).then(
        datos=>{
            console.log(datos);
            if (datos.respuesta == "ok"){
                const defaults = {
                    spread: 360,
                    ticks: 100,
                    gravity: 0,
                    decay: 0.94,
                    startVelocity: 30,
                  };
                  
                  function shoot() {
                    confetti({
                      ...defaults,
                      particleCount: 30,
                      scalar: 1.2,
                      shapes: ["circle", "square"],
                      colors: ["#a864fd", "#29cdff", "#78ff44", "#ff718d", "#fdff6a"],
                    });
                  
                    confetti({
                      ...defaults,
                      particleCount: 20,
                      scalar: 2,
                      shapes: ["emoji"],
                      shapeOptions: {
                        emoji: {
                          value: ["🌹","💖","💋","❤","😍"],
                        },
                      },
                    });
                  }
                  
                  setTimeout(shoot, 0);
                  setTimeout(shoot, 100);
                  setTimeout(shoot, 200);
            }else{
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "No se pudo guardar nada!",
                    footer: '<a href="https://www.youtube.com/watch?v=JMDJgX7oSWE">Porque me sale esto?</a>'
                  });
            }
        } 
    )
})   


