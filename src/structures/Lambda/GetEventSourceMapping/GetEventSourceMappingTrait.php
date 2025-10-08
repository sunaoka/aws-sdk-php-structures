<?php

namespace Sunaoka\Aws\Structures\Lambda\GetEventSourceMapping;

trait GetEventSourceMappingTrait
{
    /**
     * @param GetEventSourceMappingRequest $args
     * @return GetEventSourceMappingResponse
     */
    public function getEventSourceMapping(GetEventSourceMappingRequest $args)
    {
        $result = parent::getEventSourceMapping($args->toArray());
        return new GetEventSourceMappingResponse($result->toArray());
    }
}
