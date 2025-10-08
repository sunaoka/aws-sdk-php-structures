<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CreateCachediSCSIVolume;

trait CreateCachediSCSIVolumeTrait
{
    /**
     * @param CreateCachediSCSIVolumeRequest $args
     * @return CreateCachediSCSIVolumeResponse
     */
    public function createCachediSCSIVolume(CreateCachediSCSIVolumeRequest $args)
    {
        $result = parent::createCachediSCSIVolume($args->toArray());
        return new CreateCachediSCSIVolumeResponse($result->toArray());
    }
}
