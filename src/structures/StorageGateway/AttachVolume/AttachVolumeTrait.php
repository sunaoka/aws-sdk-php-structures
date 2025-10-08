<?php

namespace Sunaoka\Aws\Structures\StorageGateway\AttachVolume;

trait AttachVolumeTrait
{
    /**
     * @param AttachVolumeRequest $args
     * @return AttachVolumeResponse
     */
    public function attachVolume(AttachVolumeRequest $args)
    {
        $result = parent::attachVolume($args->toArray());
        return new AttachVolumeResponse($result->toArray());
    }
}
