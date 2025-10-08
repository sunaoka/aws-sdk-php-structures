<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVolume;

trait ModifyVolumeTrait
{
    /**
     * @param ModifyVolumeRequest $args
     * @return ModifyVolumeResponse
     */
    public function modifyVolume(ModifyVolumeRequest $args)
    {
        $result = parent::modifyVolume($args->toArray());
        return new ModifyVolumeResponse($result->toArray());
    }
}
