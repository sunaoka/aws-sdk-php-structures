<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CreateStorediSCSIVolume;

trait CreateStorediSCSIVolumeTrait
{
    /**
     * @param CreateStorediSCSIVolumeRequest $args
     * @return CreateStorediSCSIVolumeResponse
     */
    public function createStorediSCSIVolume(CreateStorediSCSIVolumeRequest $args)
    {
        $result = parent::createStorediSCSIVolume($args->toArray());
        return new CreateStorediSCSIVolumeResponse($result->toArray());
    }
}
