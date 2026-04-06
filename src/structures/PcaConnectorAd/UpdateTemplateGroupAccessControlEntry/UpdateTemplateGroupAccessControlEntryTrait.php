<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\UpdateTemplateGroupAccessControlEntry;

trait UpdateTemplateGroupAccessControlEntryTrait
{
    /**
     * @param UpdateTemplateGroupAccessControlEntryRequest $args
     * @return void
     */
    public function updateTemplateGroupAccessControlEntry(UpdateTemplateGroupAccessControlEntryRequest $args)
    {
        parent::updateTemplateGroupAccessControlEntry($args->toArray());
    }
}
