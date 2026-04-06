<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\UpdateAutoshiftObserverNotificationStatus;

trait UpdateAutoshiftObserverNotificationStatusTrait
{
    /**
     * @param UpdateAutoshiftObserverNotificationStatusRequest $args
     * @return UpdateAutoshiftObserverNotificationStatusResponse
     */
    public function updateAutoshiftObserverNotificationStatus(UpdateAutoshiftObserverNotificationStatusRequest $args)
    {
        $result = parent::updateAutoshiftObserverNotificationStatus($args->toArray());
        return new UpdateAutoshiftObserverNotificationStatusResponse($result->toArray());
    }
}
