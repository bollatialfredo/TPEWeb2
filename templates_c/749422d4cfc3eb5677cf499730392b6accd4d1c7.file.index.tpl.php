<?php /* Smarty version Smarty-3.1.14, created on 2016-10-06 01:37:37
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2107157f2497ec9b924-20223608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1475710640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2107157f2497ec9b924-20223608',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57f2497ede1856_93052658',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f2497ede1856_93052658')) {function content_57f2497ede1856_93052658($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="listaCabanias">
  <?php echo $_smarty_tpl->getSubTemplate ("cabanias.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<div class="coteiner panel">
<h1>Agregar cabaña</h1>
<form id="formCabania" method="post" enctype="multipart/form-data">
  <input type="text" name="nombre" value="" placeholder="Nombre de la cabaña">
  <input type="text" name="descripcion" value="" placeholder="Descripcion de la cabaña">
  <input type="file" name="imagenes[]" required value="" multiple>
    Categoria:
  <select name="categoria">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select>
  <button type="submit" name="button">Enviar</button>
</form>
<div id="cabaniaCreadaMensaje"></div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>