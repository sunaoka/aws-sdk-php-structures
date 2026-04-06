<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\CreateTemplateGroupAccessControlEntry;

trait CreateTemplateGroupAccessControlEntryTrait
{
    /**
     * @param CreateTemplateGroupAccessControlEntryRequest $args
     * @return void
     */
    public function createTemplateGroupAccessControlEntry(CreateTemplateGroupAccessControlEntryRequest $args)
    {
        parent::createTemplateGroupAccessControlEntry($args->toArray());
    }
}
