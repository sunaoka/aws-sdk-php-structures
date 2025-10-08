<?php

namespace Sunaoka\Aws\Structures\Lightsail\AttachDisk;

trait AttachDiskTrait
{
    /**
     * @param AttachDiskRequest $args
     * @return AttachDiskResponse
     */
    public function attachDisk(AttachDiskRequest $args)
    {
        $result = parent::attachDisk($args->toArray());
        return new AttachDiskResponse($result->toArray());
    }
}
