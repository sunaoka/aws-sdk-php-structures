<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVolume;

trait DeleteVolumeTrait
{
    /**
     * @param DeleteVolumeRequest $args
     * @return void
     */
    public function deleteVolume(DeleteVolumeRequest $args)
    {
        parent::deleteVolume($args->toArray());
    }
}
