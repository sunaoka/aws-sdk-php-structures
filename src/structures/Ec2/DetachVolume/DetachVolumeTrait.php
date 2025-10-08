<?php

namespace Sunaoka\Aws\Structures\Ec2\DetachVolume;

trait DetachVolumeTrait
{
    /**
     * @param DetachVolumeRequest $args
     * @return DetachVolumeResponse
     */
    public function detachVolume(DetachVolumeRequest $args)
    {
        $result = parent::detachVolume($args->toArray());
        return new DetachVolumeResponse($result->toArray());
    }
}
