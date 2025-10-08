<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\GetTemplateGroupAccessControlEntry;

trait GetTemplateGroupAccessControlEntryTrait
{
    /**
     * @param GetTemplateGroupAccessControlEntryRequest $args
     * @return GetTemplateGroupAccessControlEntryResponse
     */
    public function getTemplateGroupAccessControlEntry(GetTemplateGroupAccessControlEntryRequest $args)
    {
        $result = parent::getTemplateGroupAccessControlEntry($args->toArray());
        return new GetTemplateGroupAccessControlEntryResponse($result->toArray());
    }
}
