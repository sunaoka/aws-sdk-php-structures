<?php

namespace Sunaoka\Aws\Structures\S3Control\GetMultiRegionAccessPoint;

trait GetMultiRegionAccessPointTrait
{
    /**
     * @param GetMultiRegionAccessPointRequest $args
     * @return GetMultiRegionAccessPointResponse
     */
    public function getMultiRegionAccessPoint(GetMultiRegionAccessPointRequest $args)
    {
        $result = parent::getMultiRegionAccessPoint($args->toArray());
        return new GetMultiRegionAccessPointResponse($result->toArray());
    }
}
