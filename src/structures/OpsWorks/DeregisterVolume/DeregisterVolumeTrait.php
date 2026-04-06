<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DeregisterVolume;

trait DeregisterVolumeTrait
{
    /**
     * @param DeregisterVolumeRequest $args
     * @return void
     */
    public function deregisterVolume(DeregisterVolumeRequest $args)
    {
        parent::deregisterVolume($args->toArray());
    }
}
