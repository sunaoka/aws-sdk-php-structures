<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\ListEventSources;

trait ListEventSourcesTrait
{
    /**
     * @param ListEventSourcesRequest $args
     * @return ListEventSourcesResponse
     */
    public function listEventSources(ListEventSourcesRequest $args)
    {
        $result = parent::listEventSources($args->toArray());
        return new ListEventSourcesResponse($result->toArray());
    }
}
