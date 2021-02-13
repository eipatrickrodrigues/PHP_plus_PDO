
<main>
    <section class="form">

            <!-- Formulário Bootstrap -->

        <form class="row g-3" id="form" method="POST">
            <div class="col-8">
                <label for="inputAddress2" class="form-label">Nome completo</label>
                <input type="text" class="form-control" id="inputAddress2" name="nome" placeholder="Digite aqui seu nome completo">
            </div>
            <div class="col-md-4">
                <label for="inputEmail4" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="inputEmail4" name="nascimento" placeholder="01/01/2001">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="seu_email@provedor.com">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Senha</label>
                <input type="password" class="form-control" name="senha" id="inputPassword4">
            </div>
            <div class="col-6">
                <label for="inputAddress" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="inputAddress" name="endereco" placeholder="Rua Exemplo, 123, Bairro Matriz">
            </div>
            <div class="col-6">
                <label for="inputPhoneNumber" class="form-label">Telefone</label>
                <input type="tel" class="form-control" id="inputPhoneNumber" name="telefone" placeholder="31 9 9999-9999">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="inputCity" name="cidade" placeholder="Belo Horizonte">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Estado</label>
                <select id="inputState" class="form-select" name="estado">
                <option selected>Acre</option>
                <option selected>Alagoas</option>
                <option selected>Amapá</option>
                <option selected>Amazonas</option>
                <option selected>Bahia</option>
                <option selected>Ceará</option>
                <option selected>Distrito Federal</option>
                <option selected>Espírito Santo</option>
                <option selected>Goiás</option>
                <option selected>Maranhão</option>
                <option selected>Mato Grosso</option>
                <option selected>Mato Grosso do Sul</option>
                <option selected>Minas Gerais</option>
                <option selected>Pará</option>
                <option selected>Paraíba</option>
                <option selected>Paraná</option>
                <option selected>Pernambuco</option>
                <option selected>Piauí</option>
                <option selected>Rio de Janeiro</option>
                <option selected>Rio Grande do Norte</option>
                <option selected>Rio Grande do Sul</option>
                <option selected>Rondônia</option>
                <option selected>Roraima</option>
                <option selected>Santa Catarina</option>
                <option selected>São Paulo</option>
                <option selected>Segipe</option>
                <option selected>Tocantins</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">CEP</label>
                <input type="text" class="form-control" name="cep" id="inputZip" placeholder="12345-678" >
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </section>
</main>