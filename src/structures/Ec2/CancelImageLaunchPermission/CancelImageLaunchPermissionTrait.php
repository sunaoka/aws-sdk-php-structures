<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelImageLaunchPermission;

trait CancelImageLaunchPermissionTrait
{
    /**
     * @param CancelImageLaunchPermissionRequest $args
     * @return CancelImageLaunchPermissionResponse
     */
    public function cancelImageLaunchPermission(CancelImageLaunchPermissionRequest $args)
    {
        $result = parent::cancelImageLaunchPermission($args->toArray());
        return new CancelImageLaunchPermissionResponse($result->toArray());
    }
}
