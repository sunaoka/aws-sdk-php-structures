<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateEventSourceMapping;

trait UpdateEventSourceMappingTrait
{
    /**
     * @param UpdateEventSourceMappingRequest $args
     * @return UpdateEventSourceMappingResponse
     */
    public function updateEventSourceMapping(UpdateEventSourceMappingRequest $args)
    {
        $result = parent::updateEventSourceMapping($args->toArray());
        return new UpdateEventSourceMappingResponse($result->toArray());
    }
}
