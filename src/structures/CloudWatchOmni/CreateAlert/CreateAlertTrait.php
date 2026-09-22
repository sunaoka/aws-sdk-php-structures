<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\CreateAlert;

trait CreateAlertTrait
{
    /**
     * @param CreateAlertRequest $args
     * @return CreateAlertResponse
     */
    public function createAlert(CreateAlertRequest $args)
    {
        $result = parent::createAlert($args->toArray());
        return new CreateAlertResponse($result->toArray());
    }
}
