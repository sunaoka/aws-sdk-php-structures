<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByOwnedResource;

trait ListDistributionsByOwnedResourceTrait
{
    /**
     * @param ListDistributionsByOwnedResourceRequest $args
     * @return ListDistributionsByOwnedResourceResponse
     */
    public function listDistributionsByOwnedResource(ListDistributionsByOwnedResourceRequest $args)
    {
        $result = parent::listDistributionsByOwnedResource($args->toArray());
        return new ListDistributionsByOwnedResourceResponse($result->toArray());
    }
}
