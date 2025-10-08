<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportVolume;

trait ImportVolumeTrait
{
    /**
     * @param ImportVolumeRequest $args
     * @return ImportVolumeResponse
     */
    public function importVolume(ImportVolumeRequest $args)
    {
        $result = parent::importVolume($args->toArray());
        return new ImportVolumeResponse($result->toArray());
    }
}
