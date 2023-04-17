<h1 align="center">
  <p align="center">Api Lista de Tarefas</p>
  <a href="https://inottec.com.br/felipe/"><img src="https://user-images.githubusercontent.com/63815922/232280305-997dbecf-cf4d-499f-a2c6-a6f5e4448c49.png?text=Lista de Tarefa#vitrinedev" alt="inottec"></a>
</h1>

<p align="center">
<img src="http://img.shields.io/static/v1?label=STATUS&message=EM%20DESENVOLVIMENTO&color=GREEN&style=for-the-badge"/>
</p>

### Índice

- [Descrição do projeto](#descrição-do-projeto)

- [Funcionalidades](#funcionalidades)

- [Aplicação](#aplicação)

- [Ferramentas utilizadas](#ferramentas-utilizadas)

- [Acesso ao projeto](#acesso-ao-projeto)

- [Abrir e rodar o projeto](#abrir-e-rodar-o-projeto)

- [Desenvolvedores](#desenvolvedores)

## Descrição do projeto 

<p align="justify">

Api lista de tarefa é uma aplicação web desenvolvida em PHP, com essa aplicação é posivel obiter o controle de todas as suas tarefas do dia a dias!
  
![Api lista](https://user-images.githubusercontent.com/63815922/232362340-28c70aec-57c7-4079-ba2b-9d95bebb8d1d.jpg)

</p>

## Funcionalidades

:heavy_check_mark: `Funcionalidade 1:` 📆 Efetuar a listagem de todas as tarefas.

:heavy_check_mark: `Funcionalidade 2:` 📑 Permite cadastrar uma nova tarefaa.

:heavy_check_mark: `Funcionalidade 3:` 📝 Permite editar tarefas criadas

:heavy_check_mark: `Funcionalidade 4:` 🗑️ Permite excluir tarefas criadas

## Aplicação

<div align="center">
  
[Lista de Tarefa](https://user-images.githubusercontent.com/63815922/232363721-d4c4348f-802e-4602-aa1f-f8a9d3ab2770.mp4)
  
</div>





###

## Ferramentas utilizadas
<code><img width="40px" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" title = "PHP"/></code>
<code><img width="40px" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/sqlite/sqlite-original.svg" title = "SQLite"/></code>
<code><img width="40px"
 src="https://getcomposer.org/img/logo-composer-transparent.png" title = "Composer"/></code>
<code><img width="40px"
 src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" title = "Laravel"/></code>
###

## Acesso ao projeto


Você pode [acessar o código fonte do projeto](https://github.com/Felipe-S-O/api-listaDeTarefas) ou [baixá-lo](https://github.com/Felipe-S-O/api-listaDeTarefas/archive/refs/heads/main.zip).

Pagina do projeto [aqui](https://api-lista-tarefa.herokuapp.com/api/tarefa)

## Abrir e rodar o projeto

- Requisitos para rodar Api ter PHP, Composer e SQLite configurado
- Extraia o arquivo compactado baixado
- Execute o comando abaixo para instalar as dependências
```bash
composer intall
```
- Para iniciar a aplicação executa o comando abaixo
```bash
php artisan serve --host=0.0.0.0 --port=8080
```
- Comado de para consulta api
get
```bash
enderecoApi/api/tarefa
```
put
```bash
enderecoApi/api/tarefa/id
```
```bash
#body
{
 "titulo": "titulo",
 "descricao": "descrição"
}
```
del
```bash
enderecoApi/api/tarefa/id
```
post
```bash
enderecoApi/api/tarefa
```
```bash
#body
{
 "titulo": "titulo",
 "descricao": "descrição"
}
```

## Desenvolvedor

[<img src="https://avatars.githubusercontent.com/u/63815922?v=4" width=115><br><sub>Felipe Silva de Oliveira</sub>](https://github.com/Felipe-S-O) 

