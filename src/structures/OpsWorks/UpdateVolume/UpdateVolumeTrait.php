<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UpdateVolume;

trait UpdateVolumeTrait
{
    /**
     * @param UpdateVolumeRequest $args
     * @return void
     */
    public function updateVolume(UpdateVolumeRequest $args)
    {
        parent::updateVolume($args->toArray());
    }
}
