<form id="myform" method="post" action="" target="" enctype="multipart/form-data">
  <table width="100%" border="0" class="type-one">
      <tr>
        <td align="right" bgcolor="#ffffff">&nbsp;</td>
        <td bgcolor="#ffffff"></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#ffffff">Business Nature:</td>
        <td bgcolor="#ffffff"><input name="name" type="text" id="name" value="<?php echo set_value('name', $nature->name); ?>" /></td>
      </tr>
      <tr>
        <td width="23%" align="right" bgcolor="#ffffff"><label for="name">PSIC Code:</label></td>
        <td width="77%" bgcolor="#ffffff"><input name="psic_code" type="text" id="psic_code" value="<?php echo set_value('psic_code', $nature->psic_code); ?>" /></td>
      </tr>
      <tr>
        <td><input name="op" type="hidden" id="op" value="1" /></td>
        <td><input type="submit" name="save_nature" id="save_nature" value="S a v e" />
        <?php echo anchor('bp_settings/business_nature', 'Cancel');?></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
    </tr>
</table>
</form>
