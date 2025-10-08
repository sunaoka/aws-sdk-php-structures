<?php

namespace Sunaoka\Aws\Structures\S3Control\GetMultiRegionAccessPointRoutes;

trait GetMultiRegionAccessPointRoutesTrait
{
    /**
     * @param GetMultiRegionAccessPointRoutesRequest $args
     * @return GetMultiRegionAccessPointRoutesResponse
     */
    public function getMultiRegionAccessPointRoutes(GetMultiRegionAccessPointRoutesRequest $args)
    {
        $result = parent::getMultiRegionAccessPointRoutes($args->toArray());
        return new GetMultiRegionAccessPointRoutesResponse($result->toArray());
    }
}
