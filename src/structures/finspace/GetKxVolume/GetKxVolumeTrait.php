<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxVolume;

trait GetKxVolumeTrait
{
    /**
     * @param GetKxVolumeRequest $args
     * @return GetKxVolumeResponse
     */
    public function getKxVolume(GetKxVolumeRequest $args)
    {
        $result = parent::getKxVolume($args->toArray());
        return new GetKxVolumeResponse($result->toArray());
    }
}
