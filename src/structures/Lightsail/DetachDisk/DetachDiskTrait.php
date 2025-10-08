<?php

namespace Sunaoka\Aws\Structures\Lightsail\DetachDisk;

trait DetachDiskTrait
{
    /**
     * @param DetachDiskRequest $args
     * @return DetachDiskResponse
     */
    public function detachDisk(DetachDiskRequest $args)
    {
        $result = parent::detachDisk($args->toArray());
        return new DetachDiskResponse($result->toArray());
    }
}
