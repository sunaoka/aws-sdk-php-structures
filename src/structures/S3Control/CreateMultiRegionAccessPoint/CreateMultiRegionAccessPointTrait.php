<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateMultiRegionAccessPoint;

trait CreateMultiRegionAccessPointTrait
{
    /**
     * @param CreateMultiRegionAccessPointRequest $args
     * @return CreateMultiRegionAccessPointResponse
     */
    public function createMultiRegionAccessPoint(CreateMultiRegionAccessPointRequest $args)
    {
        $result = parent::createMultiRegionAccessPoint($args->toArray());
        return new CreateMultiRegionAccessPointResponse($result->toArray());
    }
}
