<?php

namespace Sunaoka\Aws\Structures\OpsWorks\AssignVolume;

trait AssignVolumeTrait
{
    /**
     * @param AssignVolumeRequest $args
     * @return void
     */
    public function assignVolume(AssignVolumeRequest $args)
    {
        parent::assignVolume($args->toArray());
    }
}
