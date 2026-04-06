<?php

namespace Sunaoka\Aws\Structures\SageMaker\DetachClusterNodeVolume;

trait DetachClusterNodeVolumeTrait
{
    /**
     * @param DetachClusterNodeVolumeRequest $args
     * @return DetachClusterNodeVolumeResponse
     */
    public function detachClusterNodeVolume(DetachClusterNodeVolumeRequest $args)
    {
        $result = parent::detachClusterNodeVolume($args->toArray());
        return new DetachClusterNodeVolumeResponse($result->toArray());
    }
}
