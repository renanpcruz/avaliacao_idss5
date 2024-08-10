# CRUD de Jogos

## Guia para a instalação do app:

Para instalar esse CRUD de jogos, com o Docker e Docker Composer previamente instalado no seu servidor (nuvem ou não), é necessário alguns comandos:
```
sudo apt update
```

Vamos criar uma pasta para colocar todos os arquivos necessários:
```
mkdir php-app
cd php-app/
```

Depois é necessário instalar o Git para receber todo o repositório com os arquivos Docker, Docker Compose e também o próprio sistema:
```
sudo apt install git
```

Já dentro do diretório onde vai ficar a aplicação, é necessário puxar os arquivos do repositório GitHub:
```
git clone https://github.com/renanpcruz/avaliacao_idss5.git .
```

Agora vamos fazer os comandos para subir a aplicação:
```
sudo docker build web_server:v1 .
sudo docker run --name web_server -d -p 80:80 web_server:v1
```

```
sudo docker-compose up -d
```

Assim seu servidor vai estar locado em:

```
http://localhost:81
```

