<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateDisk;

trait CreateDiskTrait
{
    /**
     * @param CreateDiskRequest $args
     * @return CreateDiskResponse
     */
    public function createDisk(CreateDiskRequest $args)
    {
        $result = parent::createDisk($args->toArray());
        return new CreateDiskResponse($result->toArray());
    }
}
