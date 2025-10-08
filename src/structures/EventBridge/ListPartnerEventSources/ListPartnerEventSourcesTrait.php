<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListPartnerEventSources;

trait ListPartnerEventSourcesTrait
{
    /**
     * @param ListPartnerEventSourcesRequest $args
     * @return ListPartnerEventSourcesResponse
     */
    public function listPartnerEventSources(ListPartnerEventSourcesRequest $args)
    {
        $result = parent::listPartnerEventSources($args->toArray());
        return new ListPartnerEventSourcesResponse($result->toArray());
    }
}
