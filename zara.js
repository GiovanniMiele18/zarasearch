fetch("https://songgenerated.altervista.org/zara.php")
    .then(res => res.json())
    .then(data => {
        console.log("Dati ricevuti:", data);
        // Estrarre le taglie dal JSON ricevuto
    })
    .catch(err => console.error("Errore:", err));
