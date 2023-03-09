<?php

class Cliente
{
  public int $codigo;
  public string $nome;
  public string $cpf;
  public string $endereco;
  public string $telefone;
  public string $email;
}

class Produto
{
  public int $codigo;
  public string $nome;
  public string $descricao;
  public float $valor_de_custo;
  public float $valor_de_venda;
  public int $quantidade_em_estoque;
}

/*
* Cliente
*/
$cliente = new Cliente();
$cliente->codigo = 1;
$cliente->nome = 'Rafael';
$cliente->cpf = '000.000.000-00';
$cliente->endereco = 'Rua ... nº 000, Bairro, Cidade-Uf. CEP: 00000-000';
$cliente->$telefone = '(35) 9828-8430';
$cliente->email = 'email@gmail.com';

/*
* Produto
*/
$produto = new Produto();
$produto->codigo = 1;
$produto->nome = 'Playstation 5';
$produto->descricao = 'O Console PS5™ oferece novas possibilidades de jogabilidade que você nunca imaginou. Reproduza jogos para PS5 e PS4 em Blu-ray Disc. Além disso, você também pode baixar jogos digitais para PS5 e PS4 pela PlayStation Store.';
$produto->valor_de_custo = 3200.49;
$produto->valor_de_venda = 4499.99;
$produto->quantidade_em_estoque = 37;
