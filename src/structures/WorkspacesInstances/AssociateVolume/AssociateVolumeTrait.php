<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\AssociateVolume;

trait AssociateVolumeTrait
{
    /**
     * @param AssociateVolumeRequest $args
     * @return AssociateVolumeResponse
     */
    public function associateVolume(AssociateVolumeRequest $args)
    {
        $result = parent::associateVolume($args->toArray());
        return new AssociateVolumeResponse($result->toArray());
    }
}
