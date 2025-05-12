# API de Bandas e Gêneros

Este é um mini projeto desenvolvido com Laravel para demonstrar a criação de uma API que lista bandas e seus respectivos gêneros musicais.

## Funcionalidades

- Listar todas as bandas.
- Listar todos os gêneros musicais.
- Relacionar bandas com gêneros.

## Tecnologias Utilizadas

- **Laravel**: Framework PHP para desenvolvimento da API.
- **MySQL**: Banco de dados para armazenar as informações de bandas e gêneros.
- **Postman**: Ferramenta para testar as rotas da API.

## Instalação

1. Clone o repositório:
    ```bash
    git clone https://github.com/seu-usuario/api-do-zero.git
    ```
2. Acesse o diretório do projeto:
    ```bash
    cd api-do-zero
    ```
3. Instale as dependências:
    ```bash
    composer install
    ```
4. Configure o arquivo `.env` com as informações do banco de dados.
5. Execute as migrações para criar as tabelas:
    ```bash
    php artisan migrate
    ```
6. Inicie o servidor local:
    ```bash
    php artisan serve
    ```

## Endpoints

### Listar Bandas
- **GET** `/api/bands`
- Retorna uma lista de todas as bandas cadastradas.

### Listar Gêneros
- **GET** `/api/bands/gender/`
- Retorna uma lista de todos os gêneros musicais cadastrados.

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues ou enviar pull requests.

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).