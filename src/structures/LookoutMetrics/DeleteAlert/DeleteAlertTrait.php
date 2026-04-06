<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DeleteAlert;

trait DeleteAlertTrait
{
    /**
     * @param DeleteAlertRequest $args
     * @return DeleteAlertResponse
     */
    public function deleteAlert(DeleteAlertRequest $args)
    {
        $result = parent::deleteAlert($args->toArray());
        return new DeleteAlertResponse($result->toArray());
    }
}
