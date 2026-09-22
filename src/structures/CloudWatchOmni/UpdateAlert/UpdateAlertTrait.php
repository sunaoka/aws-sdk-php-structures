<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\UpdateAlert;

trait UpdateAlertTrait
{
    /**
     * @param UpdateAlertRequest $args
     * @return UpdateAlertResponse
     */
    public function updateAlert(UpdateAlertRequest $args)
    {
        $result = parent::updateAlert($args->toArray());
        return new UpdateAlertResponse($result->toArray());
    }
}
