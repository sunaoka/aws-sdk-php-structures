<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\DeleteTemplateGroupAccessControlEntry;

trait DeleteTemplateGroupAccessControlEntryTrait
{
    /**
     * @param DeleteTemplateGroupAccessControlEntryRequest $args
     * @return void
     */
    public function deleteTemplateGroupAccessControlEntry(DeleteTemplateGroupAccessControlEntryRequest $args)
    {
        parent::deleteTemplateGroupAccessControlEntry($args->toArray());
    }
}
