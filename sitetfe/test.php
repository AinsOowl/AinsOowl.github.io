{foreach from=$items item=entry}
{if isset($entry->fields)}
  {foreach $entry->fields as $fieldname => $field}
     <div class="NewsDetailField">
        {if $field->type == 'file'}
	 
          
        {/if}
     </div>
  {/foreach}
{/if}
{if $entry->summary}
	<div id="NewsPostDetailSummary" class="mb-20">
		<strong>
			{$entry->summary}
		</strong>
	</div>
{/if}

<div id="NewsPostDetailContent">
        {* note, for security purposes we do not pass the content through smarty before displaying it.  This is incase your articles can come from untrusted sources. *}
	{$entry->content}
</div>
{/foreach}



















<main class="container body">
{foreach from=$items item=entry}
{if isset($entry->fields)}




  {foreach $entry->fields as $fieldname => $field}
   
{foreach from=$entry->fields item='field'} 
          {if $field->name == "image"}<section class="photo-art-box" style="background-image: url(uploads/TFE/uploads/{$field->value});">
        </section>
          {/if}
{/foreach}

        {/if}

  {/foreach}




{/if}

<section class="contenu-art">

<div class="cont-titre">
    <h2 id="check" class="titre-art">{title}</h2></div>
	<div class="text-art">
        <div class="info-art">




{foreach from=$entry->fields item='field'} 
            {if $field->name == "date"}<p class="date">{$field->value}</p>{/if}
{/foreach}




{foreach from=$entry->fields item='field'} 
            {if $field->name == "pays"}<p class="lieu">{$field->value}</p>{/if}
{/foreach}




        </div>
        <div class="detail-art col-9">{content}</div>
    </section>
    </div>

{/foreach}
</main>