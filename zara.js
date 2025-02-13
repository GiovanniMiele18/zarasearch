fetch("https://songgenerated.altervista.org/zara.php") // Sostituisci con il tuo URL AlterVista
    .then(res => res.json())
    .then(data => {
        console.log("Taglie disponibili:", data.sizes);

        // Stampa le taglie nella pagina
        document.getElementById("taglie").innerHTML = data.sizes.join(", ");
    })
    .catch(err => console.error("Errore:", err));
