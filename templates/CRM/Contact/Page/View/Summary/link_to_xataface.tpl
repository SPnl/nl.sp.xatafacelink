{capture assign="xataface_button"}{strip}
	<li class="crm-contact-xataface">
		<a href="{$link_to_xataface}" class="xataface" title="View old data">
			<span><div class="icon inform-icon"></div>{ts}Toon oude data{/ts}</span>
		</a>
	</li>
{/strip}{/capture}


<script type="text/javascript">
	{literal}
	cj(function() {
		cj('.crm-contact-actions-list-inner li.crm-contact-user-record').after('{/literal}{$xataface_button}{literal}');
	});
	{/literal}
</script>