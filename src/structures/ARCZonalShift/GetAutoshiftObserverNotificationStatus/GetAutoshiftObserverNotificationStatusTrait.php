<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\GetAutoshiftObserverNotificationStatus;

trait GetAutoshiftObserverNotificationStatusTrait
{
    /**
     * @param GetAutoshiftObserverNotificationStatusRequest $args
     * @return GetAutoshiftObserverNotificationStatusResponse
     */
    public function getAutoshiftObserverNotificationStatus(GetAutoshiftObserverNotificationStatusRequest $args)
    {
        $result = parent::getAutoshiftObserverNotificationStatus($args->toArray());
        return new GetAutoshiftObserverNotificationStatusResponse($result->toArray());
    }
}
