<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\ListTemplateGroupAccessControlEntries;

trait ListTemplateGroupAccessControlEntriesTrait
{
    /**
     * @param ListTemplateGroupAccessControlEntriesRequest $args
     * @return ListTemplateGroupAccessControlEntriesResponse
     */
    public function listTemplateGroupAccessControlEntries(ListTemplateGroupAccessControlEntriesRequest $args)
    {
        $result = parent::listTemplateGroupAccessControlEntries($args->toArray());
        return new ListTemplateGroupAccessControlEntriesResponse($result->toArray());
    }
}
