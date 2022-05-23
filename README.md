
# Teste Vaga Desenvolvedor Backend

### Passo a passo
Clone Repositório
```sh
git clone https://github.com/delucadev/teste.git
```

```sh
cd teste/
```


Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME=teste
APP_URL=http://localhost:81

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=nome_que_desejar_db
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```


Suba os containers do projeto
```sh
docker-compose up -d
```


Acessar o container
```sh
docker-compose exec app bash
```


Instalar as dependências do projeto
```sh
composer install
```


Gerar a key do projeto Laravel
```sh
php artisan key:generate
```


Acesse o projeto
[http://localhost:81](http://localhost:81)


### ENDPOINTS API REST
* [GET] [http://localhost:81/products](http://localhost:81/products)
* [POST] [http://localhost:81/products](http://localhost:81/products)
* [GET] [http://localhost:81/product/id](http://localhost:81/product/id)
* [PUT] [http://localhost:81/product/id](http://localhost:81/product/id)
* [POST] [http://localhost:81/product/id](http://localhost:81/product/id)

### TESTE GRAPHQL PLAYGROUND
Acesse: [http://localhost:81/graphql-playground](http://localhost:81/graphql-playground) 

Exemplo para criar produto: 
```sh
mutation{
  CreateProductMutation(
    name:"Produto 123", 
    description:"Esse é um produto via mutation",
    brand: "MarcaX",
    category: "P123",
    price: "20.90",
    color: "azul"
  ){
    name
  }
}
```

Exemplo para listar produtos:
```sh
query{
  products(page:1){
    data{
      name
      description
      brand
      price
    }
  }
}
```

