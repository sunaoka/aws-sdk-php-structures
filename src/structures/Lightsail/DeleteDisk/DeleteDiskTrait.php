<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteDisk;

trait DeleteDiskTrait
{
    /**
     * @param DeleteDiskRequest $args
     * @return DeleteDiskResponse
     */
    public function deleteDisk(DeleteDiskRequest $args)
    {
        $result = parent::deleteDisk($args->toArray());
        return new DeleteDiskResponse($result->toArray());
    }
}
