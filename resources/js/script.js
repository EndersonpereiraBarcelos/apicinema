function exibirNome() {
    listaSala = document.getElementById("listaSala");
    listaSala.innerHTML = "";

    const uri = `http://localhost:8080/api/cinema`;
    fetch(uri)
        .then((r) => r.json())
        .then((r) => {});

    function agendamento() {
        const agendamentoNome =
            document.getElementById("agendamentoNome").value;
        const agendamentoIdade =
            document.getElementById("agendamentoIdade").value;
        const agendamentoFilme =
            document.getElementById("agendamentoFilme").value;
        console.log(agendamentoNome);
        console.log(agendamentoIdade);
        console.log(agendamentoFilme);

        body = {
            name: agendamentoNome,
            idade: agendamentoIdade,
            filme: agendamentoFilme,
        };
    }

    function programacao() {
        const filmeNome = document.getElementById("filmeNome").value;
        const filmClassificao =
            document.getElementById("filmClassificao").value;
        const filmeCapacidade =
            document.getElementById("filmeCapacidade").value;
        console.log(filmeNome);
        console.log(filmClassificao);
        console.log(filmeCapacidade);
    }
    body = {
        filmeName: filmeNome,
        classificao: filmClassificao,
        capacidade: filmeCapacidade,
    };
}
