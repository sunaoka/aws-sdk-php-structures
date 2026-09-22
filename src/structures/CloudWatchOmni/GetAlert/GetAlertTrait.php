<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetAlert;

trait GetAlertTrait
{
    /**
     * @param GetAlertRequest $args
     * @return GetAlertResponse
     */
    public function getAlert(GetAlertRequest $args)
    {
        $result = parent::getAlert($args->toArray());
        return new GetAlertResponse($result->toArray());
    }
}
