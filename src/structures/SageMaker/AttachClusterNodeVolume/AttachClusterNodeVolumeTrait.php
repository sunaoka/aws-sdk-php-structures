<?php

namespace Sunaoka\Aws\Structures\SageMaker\AttachClusterNodeVolume;

trait AttachClusterNodeVolumeTrait
{
    /**
     * @param AttachClusterNodeVolumeRequest $args
     * @return AttachClusterNodeVolumeResponse
     */
    public function attachClusterNodeVolume(AttachClusterNodeVolumeRequest $args)
    {
        $result = parent::attachClusterNodeVolume($args->toArray());
        return new AttachClusterNodeVolumeResponse($result->toArray());
    }
}
