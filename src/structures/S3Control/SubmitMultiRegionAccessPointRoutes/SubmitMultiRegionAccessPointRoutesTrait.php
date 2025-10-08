<?php

namespace Sunaoka\Aws\Structures\S3Control\SubmitMultiRegionAccessPointRoutes;

trait SubmitMultiRegionAccessPointRoutesTrait
{
    /**
     * @param SubmitMultiRegionAccessPointRoutesRequest $args
     * @return SubmitMultiRegionAccessPointRoutesResponse
     */
    public function submitMultiRegionAccessPointRoutes(SubmitMultiRegionAccessPointRoutesRequest $args)
    {
        $result = parent::submitMultiRegionAccessPointRoutes($args->toArray());
        return new SubmitMultiRegionAccessPointRoutesResponse($result->toArray());
    }
}
