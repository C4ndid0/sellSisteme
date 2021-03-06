<?php
$config = array('clientes' => array(array(
                                	'field'=>'nomeCliente',
                                	'label'=>'Nome',
                                	'rules'=>'required|trim|xss_clean'
                                ),
								array(
                                	'field'=>'telefone',
                                	'label'=>'Telefone',
                                	'rules'=>'required|trim|xss_clean'))
                ,
                'servicos' => array(array(
                                    'field'=>'nome',
                                    'label'=>'Nome',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'descricao',
                                    'label'=>'',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'preco',
                                    'label'=>'',
                                    'rules'=>'required|trim|xss_clean'
                                ))
                ,
                'produtos' => array(array(
                                    'field'=>'descricao',
                                    'label'=>'',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'unidade',
                                    'label'=>'Unidade',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'precoCompra',
                                    'label'=>'Preo de Compra',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'precoVenda',
                                    'label'=>'Preo de Venda',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'estoque',
                                    'label'=>'Estoque',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'estoqueMinimo',
                                    'label'=>'Estoque Mnimo',
                                    'rules'=>'trim|xss_clean'
                                ))
                ,
                'usuarios' => array(array(
                                    'field'=>'nome',
                                    'label'=>'Nome',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'email',
                                    'label'=>'Email',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'senha',
                                    'label'=>'Senha',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'telefone',
                                    'label'=>'Telefone',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'situacao',
                                    'label'=>'Situacao',
                                    'rules'=>'required|trim|xss_clean'
                                ))
                ,      
                'os' => array(array(
                                    'field'=>'dataInicial',
                                    'label'=>'DataInicial',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'dataFinal',
                                    'label'=>'DataFinal',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'garantia',
                                    'label'=>'Garantia',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'descricaoProduto',
                                    'label'=>'DescricaoProduto',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'defeito',
                                    'label'=>'Defeito',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'status',
                                    'label'=>'Status',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'observacoes',
                                    'label'=>'Observacoes',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'clientes_id',
                                    'label'=>'clientes',
                                    'rules'=>'trim|xss_clean|required'
                                ),
                                array(
                                    'field'=>'usuarios_id',
                                    'label'=>'usuarios_id',
                                    'rules'=>'trim|xss_clean|required'
                                ),
                                array(
                                    'field'=>'laudoTecnico',
                                    'label'=>'Laudo Tecnico',
                                    'rules'=>'trim|xss_clean'
                                ))

                  ,
				'tiposUsuario' => array(array(
                                	'field'=>'nomeTipo',
                                	'label'=>'NomeTipo',
                                	'rules'=>'required|trim|xss_clean'
                                ),
								array(
                                	'field'=>'situacao',
                                	'label'=>'Situacao',
                                	'rules'=>'required|trim|xss_clean'
                                ))

                ,
                'receita' => array(array(
                                    'field'=>'descricao',
                                    'label'=>'Descri????o',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'valor',
                                    'label'=>'Valor',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'vencimento',
                                    'label'=>'Data Vencimento',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                        
                                array(
                                    'field'=>'cliente',
                                    'label'=>'Cliente',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'tipo',
                                    'label'=>'Tipo',
                                    'rules'=>'required|trim|xss_clean'
                                ))
                ,
                'receitaOs' => array(array(
                                    'field'=>'numeroOs',
                                    'label'=>'N??mero da Ordem de Servi??o',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'valor',
                                    'label'=>'Valor',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'vencimentoOs',
                                    'label'=>'Data Vencimento',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'tipo',
                                    'label'=>'Tipo',
                                    'rules'=>'required|trim|xss_clean'
                                ))
                ,
                'despesa' => array(array(
                                    'field'=>'descricao',
                                    'label'=>'Descri????o',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'valor',
                                    'label'=>'Valor',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'vencimento',
                                    'label'=>'Data Vencimento',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'fornecedor',
                                    'label'=>'Fornecedor',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'tipo',
                                    'label'=>'Tipo',
                                    'rules'=>'required|trim|xss_clean'
                                ))
                ,
                'vendas' => array(array(

                                    'field' => 'dataVenda',
                                    'label' => 'Data da Venda',
                                    'rules' => 'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'clientes_id',
                                    'label'=>'clientes',
                                    'rules'=>'trim|xss_clean|required'
                                ),
                                array(
                                    'field'=>'usuarios_id',
                                    'label'=>'usuarios_id',
                                    'rules'=>'trim|xss_clean|required'
                                ))
		);
			   