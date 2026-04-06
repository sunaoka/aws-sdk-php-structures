<?php

namespace Sunaoka\Aws\Structures\Ec2\CopyVolumes;

trait CopyVolumesTrait
{
    /**
     * @param CopyVolumesRequest $args
     * @return CopyVolumesResponse
     */
    public function copyVolumes(CopyVolumesRequest $args)
    {
        $result = parent::copyVolumes($args->toArray());
        return new CopyVolumesResponse($result->toArray());
    }
}
