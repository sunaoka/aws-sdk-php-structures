<?php

namespace Sunaoka\Aws\Structures\Proton\NotifyResourceDeploymentStatusChange;

trait NotifyResourceDeploymentStatusChangeTrait
{
    /**
     * @param NotifyResourceDeploymentStatusChangeRequest $args
     * @return NotifyResourceDeploymentStatusChangeResponse
     */
    public function notifyResourceDeploymentStatusChange(NotifyResourceDeploymentStatusChangeRequest $args)
    {
        $result = parent::notifyResourceDeploymentStatusChange($args->toArray());
        return new NotifyResourceDeploymentStatusChangeResponse($result->toArray());
    }
}
