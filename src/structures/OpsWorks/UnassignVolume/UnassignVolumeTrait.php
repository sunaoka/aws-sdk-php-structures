<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UnassignVolume;

trait UnassignVolumeTrait
{
    /**
     * @param UnassignVolumeRequest $args
     * @return void
     */
    public function unassignVolume(UnassignVolumeRequest $args)
    {
        parent::unassignVolume($args->toArray());
    }
}
