<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxVolume;

trait CreateKxVolumeTrait
{
    /**
     * @param CreateKxVolumeRequest $args
     * @return CreateKxVolumeResponse
     */
    public function createKxVolume(CreateKxVolumeRequest $args)
    {
        $result = parent::createKxVolume($args->toArray());
        return new CreateKxVolumeResponse($result->toArray());
    }
}
