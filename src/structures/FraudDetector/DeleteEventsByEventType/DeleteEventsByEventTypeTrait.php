<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DeleteEventsByEventType;

trait DeleteEventsByEventTypeTrait
{
    /**
     * @param DeleteEventsByEventTypeRequest $args
     * @return DeleteEventsByEventTypeResponse
     */
    public function deleteEventsByEventType(DeleteEventsByEventTypeRequest $args)
    {
        $result = parent::deleteEventsByEventType($args->toArray());
        return new DeleteEventsByEventTypeResponse($result->toArray());
    }
}
