<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\CreateVolume;

trait CreateVolumeTrait
{
    /**
     * @param CreateVolumeRequest $args
     * @return CreateVolumeResponse
     */
    public function createVolume(CreateVolumeRequest $args)
    {
        $result = parent::createVolume($args->toArray());
        return new CreateVolumeResponse($result->toArray());
    }
}
