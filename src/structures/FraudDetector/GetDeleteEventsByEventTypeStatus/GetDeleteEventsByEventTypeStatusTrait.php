<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetDeleteEventsByEventTypeStatus;

trait GetDeleteEventsByEventTypeStatusTrait
{
    /**
     * @param GetDeleteEventsByEventTypeStatusRequest $args
     * @return GetDeleteEventsByEventTypeStatusResponse
     */
    public function getDeleteEventsByEventTypeStatus(GetDeleteEventsByEventTypeStatusRequest $args)
    {
        $result = parent::getDeleteEventsByEventTypeStatus($args->toArray());
        return new GetDeleteEventsByEventTypeStatusResponse($result->toArray());
    }
}
