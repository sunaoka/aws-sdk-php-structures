<?php

namespace Sunaoka\Aws\Structures\Deadline\GetVolume;

trait GetVolumeTrait
{
    /**
     * @param GetVolumeRequest $args
     * @return GetVolumeResponse
     */
    public function getVolume(GetVolumeRequest $args)
    {
        $result = parent::getVolume($args->toArray());
        return new GetVolumeResponse($result->toArray());
    }
}
