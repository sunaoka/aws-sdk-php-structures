<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateEventSourceMapping;

trait CreateEventSourceMappingTrait
{
    /**
     * @param CreateEventSourceMappingRequest $args
     * @return CreateEventSourceMappingResponse
     */
    public function createEventSourceMapping(CreateEventSourceMappingRequest $args)
    {
        $result = parent::createEventSourceMapping($args->toArray());
        return new CreateEventSourceMappingResponse($result->toArray());
    }
}
