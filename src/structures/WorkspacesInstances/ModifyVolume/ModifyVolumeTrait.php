<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\ModifyVolume;

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
