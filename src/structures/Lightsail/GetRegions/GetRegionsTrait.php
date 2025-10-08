<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRegions;

trait GetRegionsTrait
{
    /**
     * @param GetRegionsRequest $args
     * @return GetRegionsResponse
     */
    public function getRegions(GetRegionsRequest $args)
    {
        $result = parent::getRegions($args->toArray());
        return new GetRegionsResponse($result->toArray());
    }
}
