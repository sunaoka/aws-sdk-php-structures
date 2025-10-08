<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDisk;

trait GetDiskTrait
{
    /**
     * @param GetDiskRequest $args
     * @return GetDiskResponse
     */
    public function getDisk(GetDiskRequest $args)
    {
        $result = parent::getDisk($args->toArray());
        return new GetDiskResponse($result->toArray());
    }
}
