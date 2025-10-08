<?php

namespace Sunaoka\Aws\Structures\Lambda\ListEventSourceMappings;

trait ListEventSourceMappingsTrait
{
    /**
     * @param ListEventSourceMappingsRequest $args
     * @return ListEventSourceMappingsResponse
     */
    public function listEventSourceMappings(ListEventSourceMappingsRequest $args)
    {
        $result = parent::listEventSourceMappings($args->toArray());
        return new ListEventSourceMappingsResponse($result->toArray());
    }
}
