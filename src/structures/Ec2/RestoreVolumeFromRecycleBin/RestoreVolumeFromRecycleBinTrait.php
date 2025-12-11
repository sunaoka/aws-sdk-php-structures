<?php

namespace Sunaoka\Aws\Structures\Ec2\RestoreVolumeFromRecycleBin;

trait RestoreVolumeFromRecycleBinTrait
{
    /**
     * @param RestoreVolumeFromRecycleBinRequest $args
     * @return RestoreVolumeFromRecycleBinResponse
     */
    public function restoreVolumeFromRecycleBin(RestoreVolumeFromRecycleBinRequest $args)
    {
        $result = parent::restoreVolumeFromRecycleBin($args->toArray());
        return new RestoreVolumeFromRecycleBinResponse($result->toArray());
    }
}
