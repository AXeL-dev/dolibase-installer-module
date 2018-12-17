<?php

global $langs, $conf;

$dolibasedir = DOL_DOCUMENT_ROOT.'/dolibase';

$builder_is_enabled = ! file_exists($dolibasedir.'/builder/.htaccess');

?>

<table class="noborder" width="100%">
	<?php if (is_dir($dolibasedir)) { ?>
	<tr>
		<td align="left" colspan="2"><?php echo $langs->trans('DolibaseIsInstalledInto', $dolibasedir); ?></td>
	</tr>
	<?php } ?>
	<tr>
		<td align="left"><?php echo $langs->trans('DisableAutoCheckForUpdates'); ?></td>
		<td align="right">
			<?php if ($conf->global->DOLIBASE_DISABLE_CHECK_FOR_UPDATES) { ?>
				<a href="<?php echo $_SERVER['PHP_SELF'].'?action=del_DOLIBASE_DISABLE_CHECK_FOR_UPDATES'; ?>"><?php echo img_picto($langs->trans("Enabled"), 'switch_on'); ?></a>
			<?php } else { ?>
				<a href="<?php echo $_SERVER['PHP_SELF'].'?action=set_DOLIBASE_DISABLE_CHECK_FOR_UPDATES'; ?>"><?php echo img_picto($langs->trans("Disabled"), 'switch_off'); ?></a>
			<?php } ?>
		</td>
	</tr>
	<tr>
		<td align="left"><?php echo $langs->trans('EnableExpAndDevModules'); ?></td>
		<td align="right">
			<?php if ($conf->global->MAIN_FEATURES_LEVEL == '2') { ?>
				<a href="<?php echo $_SERVER['PHP_SELF'].'?action=set_MAIN_FEATURES_LEVEL&MAIN_FEATURES_LEVEL=0'; ?>"><?php echo img_picto($langs->trans("Enabled"), 'switch_on'); ?></a>
			<?php } else { ?>
				<a href="<?php echo $_SERVER['PHP_SELF'].'?action=set_MAIN_FEATURES_LEVEL&MAIN_FEATURES_LEVEL=2'; ?>"><?php echo img_picto($langs->trans("Disabled"), 'switch_off'); ?></a>
			<?php } ?>
		</td>
	</tr>
	<tr>
		<td align="left"><?php echo $langs->trans('EnableDolibaseInstallLock'); ?></td>
		<td align="right">
			<?php if ($conf->global->DOLIBASE_INSTALL_LOCK) { ?>
				<a href="<?php echo $_SERVER['PHP_SELF'].'?action=del_DOLIBASE_INSTALL_LOCK'; ?>"><?php echo img_picto($langs->trans("Enabled"), 'switch_on'); ?></a>
			<?php } else { ?>
				<a href="<?php echo $_SERVER['PHP_SELF'].'?action=set_DOLIBASE_INSTALL_LOCK'; ?>"><?php echo img_picto($langs->trans("Disabled"), 'switch_off'); ?></a>
			<?php } ?>
		</td>
	</tr>
	<tr>
		<td align="left"><?php echo $langs->trans('EnableDolibaseBuilder'); ?></td>
		<td align="right">
			<?php if ($builder_is_enabled) { ?>
				<a href="<?php echo $_SERVER['PHP_SELF'].'?action=disable_builder'; ?>"><?php echo img_picto($langs->trans("Enabled"), 'switch_on'); ?></a>
			<?php } else { ?>
				<a href="<?php echo $_SERVER['PHP_SELF'].'?action=enable_builder'; ?>"><?php echo img_picto($langs->trans("Disabled"), 'switch_off'); ?></a>
			<?php } ?>
		</td>
	</tr>
</table>

<?php if ($builder_is_enabled) { ?>

<div class="tabsAction force-center">
	<a class="butAction" href="<?php echo dol_buildpath('dolibase/builder/module.php', 1); ?>" target="_blank"><?php echo $langs->trans('OpenDolibaseBuilder'); ?></a>
</div>

<?php } ?>
