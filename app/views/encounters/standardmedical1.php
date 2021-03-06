<?php echo HTML::script('/js/standardmedical1.js');?>
<div id="noshtabs">
	<div id="encounter_tabs">
		<ul>
			<?php if(Session::get('group_id') == '2') {?>
				<li id="encounter_tabs_hpi"><a href="#encounter_tabs_1">HPI</a></li>
			<?php }?>
			<li id="encounter_tabs_ros"><a href="#encounter_tabs_2">ROS</a></li>
			<li id="encounter_tabs_oh"><a href="#encounter_tabs_3">History</a></li>
			<li id="encounter_tabs_vitals"><a href="#encounter_tabs_4">VS</a></li>
			<?php if(Session::get('group_id') == '2') {?>
				<li id="encounter_tabs_pe"><a href="#encounter_tabs_5">PE</a></li>
			<?php }?>
			<li id="encounter_tabs_results"><a href="#encounter_tabs_6">Results</a></li>
			<li id="encounter_tabs_labs"><a href="#encounter_tabs_7">Labs</a></li>
			<li id="encounter_tabs_proc"><a href="#encounter_tabs_8">Procedure</a></li>
			<?php if(Session::get('group_id') == '2') {?>
				<li id="encounter_tabs_assessment"><a href="#encounter_tabs_9">DX</a></li>
			<?php }?>
			<li id="encounter_tabs_orders"><a href="#encounter_tabs_10">Orders</a></li>
		</ul>
		<?php if(Session::get('group_id') == '2') {?>
			<div id="encounter_tabs_1" style="overflow:auto">
				<div id="hpi_form" class="pure-g">
					<div class="pure-u-13-24">
						<form class="pure-form pure-form-stacked">
							<label for="hpi">Preview: <span class="textdump_text"></span> for templates.</label><textarea style="width:95%" rows="16" name="hpi" id="hpi" class="text textdump"></textarea><input type="hidden" name="hpi_old" id="hpi_old"/>
						</form>
						<br><button type="button" id="hpi_reset" class="reset nosh_button">Clear</button><?php echo $cpe;?><?php echo $wcc;?><?php echo $preg;?><?php echo $mtm;?>
					</div>
					<div class="pure-u-11-24">
						<form class="pure-form pure-form-stacked">
							<label for="hpi_pf_template">Patient Forms:</label><select id="hpi_pf_template" class="text"></select>
						</form>
					</div>
				</div>
			</div>
		<?php }?>
		<div id="encounter_tabs_2" style="overflow:auto">
			<?php echo $ros;?>
		</div>
		<div id="encounter_tabs_3" style="overflow:auto">
			<?php echo $oh;?>
		</div>
		<div id="encounter_tabs_4" style="overflow:auto">
			<?php echo $vitals;?>
		</div>
		<?php if(Session::get('group_id') == '2') {?>
			<div id="encounter_tabs_5" style="overflow:auto">
				<?php echo $pe;?>
			</div>
		<?php }?>
		<div id="encounter_tabs_6" style="overflow:auto">
			<?php echo $results;?>
		</div>
		<div id="encounter_tabs_7" style="overflow:auto">
			<?php echo $labs;?>
		</div>
		<div id="encounter_tabs_8" style="overflow:auto">
			<?php echo $proc;?>
		</div>
		<?php if(Session::get('group_id') == '2') {?>
			<div id="encounter_tabs_9" style="overflow:auto">
				<?php echo $assessment;?>
			</div>
		<?php }?>
		<div id="encounter_tabs_10" style="overflow:auto">
			<?php echo $orders;?>
		</div>
	</div>
</div>
