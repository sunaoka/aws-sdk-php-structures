<?php

namespace Sunaoka\Aws\Structures\OpsWorks\RegisterVolume;

trait RegisterVolumeTrait
{
    /**
     * @param RegisterVolumeRequest $args
     * @return RegisterVolumeResponse
     */
    public function registerVolume(RegisterVolumeRequest $args)
    {
        $result = parent::registerVolume($args->toArray());
        return new RegisterVolumeResponse($result->toArray());
    }
}
