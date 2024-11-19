create database pratica1_elisa;
use pratica1_elisa;

create table clientes (
	id_cliente INT auto_increment primary key,
    nome varchar(100) not null,
    email varchar(100) not null,
    telefone varchar(11) not null
);

create table colaboradores (
	id_colaborador INT auto_increment primary key,
	nome varchar(100) not null,
    email varchar(100) not null,
    telefone varchar(11) not null
);

create table chamados (
id_chamado INT auto_increment primary key,
cliente_id INT not null,
descricao text not null,
criticidade ENUM('baixa', 'média', 'alta') not null,
status ENUM('aberto', 'em andamento', 'resolvido') not null default 'aberto',
data_abertura datetime not null default current_timestamp,
colaborador_id INT,
foreign key (colaborador_id) references colaboradores(id_colaborador) on delete set null,
foreign key (cliente_id) references clientes(id_cliente) on delete cascade
);
