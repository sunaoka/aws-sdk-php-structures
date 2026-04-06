<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\DisassociateVolume;

trait DisassociateVolumeTrait
{
    /**
     * @param DisassociateVolumeRequest $args
     * @return DisassociateVolumeResponse
     */
    public function disassociateVolume(DisassociateVolumeRequest $args)
    {
        $result = parent::disassociateVolume($args->toArray());
        return new DisassociateVolumeResponse($result->toArray());
    }
}
