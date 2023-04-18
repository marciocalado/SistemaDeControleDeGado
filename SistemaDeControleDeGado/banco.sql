CREATE TABLE produto(
    codigo     serial           primary key,
    nome        varchar(50)     not null,
    racao       float           not null,
    leite        int             not null,
    nascimento  data             not null
    


);