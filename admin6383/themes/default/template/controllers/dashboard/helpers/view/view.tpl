{*
* 2007-2014 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<script>
	var dashboard_ajax_url = '{$link->getAdminLink('AdminDashboard')}';
	var adminstats_ajax_url = '{$link->getAdminLink('AdminStats')}';
	var no_results_translation = '{l s='No result' js=1}';
	var dashboard_use_push = '{$dashboard_use_push|intval}';
	var read_more = '{l s='Read more' js=1}';
</script>

<div id="dashboard">
	<div class="row">
		<div class="col-lg-12">
{if $warning}
			<div class="alert alert-warning">{$warning}</div>
{/if}
			<div id="calendar" class="panel">
				<form action="{$action|escape}" method="post" id="calendar_form" name="calendar_form" class="form-inline">
					<div class="btn-group">
						<button type="button" name="submitDateDay" class="btn btn-default submitDateDay{if isset($preselect_date_range) && $preselect_date_range == 'day'} active{/if}">
							{l s='Day'}
						</button>
						<button type="button" name="submitDateMonth" class="btn btn-default submitDateMonth{if isset($preselect_date_range) && $preselect_date_range == 'month'} active{/if}">
							{l s='Month'}
						</button>
						<button type="button" name="submitDateYear" class="btn btn-default submitDateYear{if isset($preselect_date_range) && $preselect_date_range == 'year'} active{/if}">
							{l s='Year'}
						</button>
						<button type="button" name="submitDateDayPrev" class="btn btn-default submitDateDayPrev{if isset($preselect_date_range) && $preselect_date_range == 'prev-day'} active{/if}">
							{l s='Day'}-1
						</button>
						<button type="button" name="submitDateMonthPrev" class="btn btn-default submitDateMonthPrev{if isset($preselect_date_range) && $preselect_date_range == 'prev-month'} active{/if}">
							{l s='Month'}-1
						</button>
						<button type="button" name="submitDateYearPrev" class="btn btn-default submitDateYearPrev{if isset($preselect_date_range) && $preselect_date_range == 'prev-year'} active{/if}">
							{l s='Year'}-1
						</button>
						<!--
						<button type="submit" name="submitDateRealTime" class="hide btn btn-default submitDateRealTime {if $dashboard_use_push}active{/if}" value="{!$dashboard_use_push|intval}">
							{l s='Real Time'}
						</button> -->
					</div>

					<input type="hidden" name="datepickerFrom" id="datepickerFrom" value="{$date_from|escape}" class="form-control">
					<input type="hidden" name="datepickerTo" id="datepickerTo" value="{$date_to|escape}" class="form-control">
					<input type="hidden" name="preselectDateRange" id="preselectDateRange" value="{if isset($preselect_date_range)}{$preselect_date_range}{/if}" class="form-control">

					<div class="form-group pull-right">
						<button id="datepickerExpand" class="btn btn-default" type="button">
							<i class="icon-calendar-empty"></i>
							<span class="hidden-xs">
								{l s='From'}
								<strong class="text-info" id="datepicker-from-info">{$date_from|escape}</strong>
								{l s='To'}
								<strong class="text-info" id="datepicker-to-info">{$date_to|escape}</strong>
								<strong class="text-info" id="datepicker-diff-info"></strong>
							</span>
							<i class="icon-caret-down"></i>
						</button>
					</div>
					{$calendar}
				</form>	
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4" id="hookDashboardZoneOne">
			{$hookDashboardZoneOne}
		</div>
		<div class="col-md-8" id="hookDashboardZoneTwo">
			{$hookDashboardZoneTwo}
			<!--
			<div id="dashaddons" class="row-margin-bottom">
				<a href="http://addons.prestashop.com/en/209-dashboards?utm_source=backoffice_dashboard" target="_blank">
					<i class="icon-plus"></i> {l s='Add more graph and data'}
				</a>
			</div>
			-->
		</div>
		<!-- Div geral de dados do prestashop
		

		<div class="col-md-12 col-lg-2">
					
			<!-- Retirando dicas do dia
			<section class="dash_news panel">
				<h3><i class="icon-rss"></i> PrestaShop News</h3>
				<div class="dash_news_content"></div>
			</section>
			-->
			<!-- Retirando prestashop update
			<section id="dash_version" class="visible-lg">
				<iframe frameborder="no" scrolling="no" allowtransparency="true" src="{$new_version_url}"></iframe>
			</section>
			-->

			<!-- Retirando links úteis
			<section class="dash_links panel">
				<h3><i class="icon-link"></i> {l s="Useful Links"}</h3>
					<dl>
						<dt>{l s="Discover the official documentation"}</dt>
						<dd><a href="http://doc.prestashop.com/display/PS16?utm_source=backoffice_dashboard" target="_blank">{l s="Go to doc.prestashop.com"}</a></dd>
					</dl>
					<dl>
						<dt>{l s="Use the forum & discover a great community"}</dt>
						<dd><a href="http://www.prestashop.com/forums?utm_source=backoffice_dashboard" target="_blank">{l s="Go to forums.prestashop.com"}</a></dd>
					</dl>
					<dl>
						<dt>{l s="Enhance your Shop with new templates & modules"}</dt>
						<dd><a href="http://addons.prestashop.com?utm_source=backoffice_dashboard" target="_blank">{l s="Go to addons.prestashop.com"}</a></dd>
					</dl>
					<dl>
						<dt>{l s="Report issues in the Bug Tracker"}</dt>
						<dd><a href="http://forge.prestashop.com?utm_source=backoffice_dashboard" target="_blank">{l s="Go to forge.prestashop.com"}</a></dd>
					</dl>
					<dl>
						<dt>{l s="Contact Us"}</dt>
						<dd><a href="http://www.prestashop.com/en/contact-us?utm_source=backoffice_dashboard" target="_blank">{l s="Go to prestashop.com"}</a></dd>
					</dl>
			</section>
			-->
           <!--Retirando modo demontstração
			<section class="dash_simulation panel">
				<h3><i class="icon-link"></i> {l s="Demo Mode"}</h3>
				<span class="switch prestashop-switch">
					<input id="PS_DASHBOARD_SIMULATION_on" class="ps_dashboard_simulation" type="radio" {if $PS_DASHBOARD_SIMULATION == 1}checked="checked"{/if} value="1" name="PS_DASHBOARD_SIMULATION">
					<label class="radioCheck" for="PS_DASHBOARD_SIMULATION_on">
						{l s='Yes'}
					</label>
					<input id="PS_DASHBOARD_SIMULATION_off" class="ps_dashboard_simulation" type="radio" {if $PS_DASHBOARD_SIMULATION == 0}checked="checked"{/if} value="0" name="PS_DASHBOARD_SIMULATION">
					<label class="radioCheck" for="PS_DASHBOARD_SIMULATION_off">
						{l s='No'}
					</label>
					<a class="slide-button btn"></a>
				</span>
				{l s='This mode generates fake data so you can try your Dashboard without real numbers.'}
			</section>        
           
        <!--    
		</div>
		-->
		
	</div>
</div>