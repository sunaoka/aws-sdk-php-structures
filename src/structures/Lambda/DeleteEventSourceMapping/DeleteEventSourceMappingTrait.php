<?php

namespace Sunaoka\Aws\Structures\Lambda\DeleteEventSourceMapping;

trait DeleteEventSourceMappingTrait
{
    /**
     * @param DeleteEventSourceMappingRequest $args
     * @return DeleteEventSourceMappingResponse
     */
    public function deleteEventSourceMapping(DeleteEventSourceMappingRequest $args)
    {
        $result = parent::deleteEventSourceMapping($args->toArray());
        return new DeleteEventSourceMappingResponse($result->toArray());
    }
}
