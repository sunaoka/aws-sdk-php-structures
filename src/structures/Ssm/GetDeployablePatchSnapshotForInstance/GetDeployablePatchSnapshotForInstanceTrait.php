<?php

namespace Sunaoka\Aws\Structures\Ssm\GetDeployablePatchSnapshotForInstance;

trait GetDeployablePatchSnapshotForInstanceTrait
{
    /**
     * @param GetDeployablePatchSnapshotForInstanceRequest $args
     * @return GetDeployablePatchSnapshotForInstanceResponse
     */
    public function getDeployablePatchSnapshotForInstance(GetDeployablePatchSnapshotForInstanceRequest $args)
    {
        $result = parent::getDeployablePatchSnapshotForInstance($args->toArray());
        return new GetDeployablePatchSnapshotForInstanceResponse($result->toArray());
    }
}
