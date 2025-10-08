<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DetachVolume;

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
