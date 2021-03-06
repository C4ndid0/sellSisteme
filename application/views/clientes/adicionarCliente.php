<script src="<?php echo base_url()?>assets/js/jquery.mask.min.js"/></script>

<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-user"></i>
                </span>
                <h5>Adicionar um cliente</h5>
            </div>
            <div class="widget-content nopadding">
                <?php if ($custom_error != '') {
                    echo '<div class="alert alert-danger">' . $custom_error . '</div>';
                } ?>
                <form action="<?php echo current_url(); ?>" id="formCliente" method="post" class="form-horizontal" >
                    <fieldset>
                        <legend>Dados Pessoais</legend>
                        <div class="control-group">
                            <label for="nomeCliente" class="control-label">Nome:</label>
                            <div class="controls">
                                <input id="nomeCliente" type="text" name="nomeCliente" value="<?php echo set_value('nomeCliente'); ?>"  />
                                <span class="required">*</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="telefone" class="control-label">Telefone:</label>
                            <div class="controls">
                                <input id="telefone" type="text" name="telefone" value="<?php echo set_value('telefone'); ?>" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" />
                                <span class="required">*</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="documento" class="control-label">CPF ou CNPJ:</label>
                            <div class="controls">
                                <input id="documento" type="text" name="documento" value="<?php echo set_value('documento'); ?>"  />
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="celular" class="control-label">Celular:</label>
                            <div class="controls">
                                <input id="celular" type="text" name="celular" value="<?php echo set_value('celular'); ?>" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" />
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="email" class="control-label">E-mail:</label>
                            <div class="controls">
                                <input id="email" type="text" name="email" value="<?php echo set_value('email'); ?>"  />
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Dados do Endere??o</legend>
                        <div class="control-group" class="control-label">
                            <label for="cep" class="control-label">CEP:</label>
                            <div class="controls">
                                <input id="cep" type="text" name="cep" value="<?php echo set_value('cep'); ?>"  />
                            </div>
                        </div>
                        <div class="control-group" class="control-label">
                            <label for="rua" class="control-label">Endere??o:</label>
                            <div class="controls">
                                <input id="rua" type="text" name="rua" value="<?php echo set_value('rua'); ?>"  />
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="numero" class="control-label">N??mero:</label>
                            <div class="controls">
                                <input id="numero" type="text" name="numero" value="<?php echo set_value('numero'); ?>"  />
                            </div>
                        </div>

                        <div class="control-group" class="control-label">
                            <label for="bairro" class="control-label">Bairro:</label>
                            <div class="controls">
                                <input id="bairro" type="text" name="bairro" value="<?php echo set_value('bairro'); ?>"  />
                            </div>
                        </div>

                        <div class="control-group" class="control-label">
                            <label for="cidade" class="control-label">Cidade:</label>
                            <div class="controls">
                                <input id="cidade" type="text" name="cidade" value="<?php echo set_value('cidade'); ?>"  />
                            </div>
                        </div>

                        <div class="control-group" class="control-label">
                            <label for="estado" class="control-label">Estado:</label>
                            <div class="controls">
                                <input id="estado" type="text" name="estado" value="<?php echo set_value('estado'); ?>"  />
                            </div>
                        </div>


                    </fieldset>


                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Adicionar</button>
                                <a href="<?php echo base_url() ?>index.php/clientes" id="" class="btn"><i class="icon-arrow-left"></i> Voltar</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="<?php echo base_url()?>assets/js/jquery.validate.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#formCliente').validate({
            rules :{
                  nomeCliente:{ required: true},
                  telefone:{ required: true}
            },
            messages:{
                  nomeCliente :{ required: 'Campo Requerido.'},
                  telefone:{ required: 'Campo Requerido.'}

            },

            errorClass: "help-inline",
            errorElement: "span",
            highlight:function(element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
           });
            $("#telefone").mask("(00) 0000-00009");
            $("#celular").mask("(00) 0000-00009");
            $("#cep").mask("00000-000");

      });
</script>




