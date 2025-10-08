<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDisks;

trait GetDisksTrait
{
    /**
     * @param GetDisksRequest $args
     * @return GetDisksResponse
     */
    public function getDisks(GetDisksRequest $args)
    {
        $result = parent::getDisks($args->toArray());
        return new GetDisksResponse($result->toArray());
    }
}
