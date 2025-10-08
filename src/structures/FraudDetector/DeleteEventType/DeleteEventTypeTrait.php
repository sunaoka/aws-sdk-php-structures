<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DeleteEventType;

trait DeleteEventTypeTrait
{
    /**
     * @param DeleteEventTypeRequest $args
     * @return DeleteEventTypeResponse
     */
    public function deleteEventType(DeleteEventTypeRequest $args)
    {
        $result = parent::deleteEventType($args->toArray());
        return new DeleteEventTypeResponse($result->toArray());
    }
}
