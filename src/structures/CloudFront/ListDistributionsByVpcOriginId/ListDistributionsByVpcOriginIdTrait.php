<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByVpcOriginId;

trait ListDistributionsByVpcOriginIdTrait
{
    /**
     * @param ListDistributionsByVpcOriginIdRequest $args
     * @return ListDistributionsByVpcOriginIdResponse
     */
    public function listDistributionsByVpcOriginId(ListDistributionsByVpcOriginIdRequest $args)
    {
        $result = parent::listDistributionsByVpcOriginId($args->toArray());
        return new ListDistributionsByVpcOriginIdResponse($result->toArray());
    }
}
