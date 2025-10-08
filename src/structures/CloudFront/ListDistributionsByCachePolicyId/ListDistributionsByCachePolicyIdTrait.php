<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByCachePolicyId;

trait ListDistributionsByCachePolicyIdTrait
{
    /**
     * @param ListDistributionsByCachePolicyIdRequest $args
     * @return ListDistributionsByCachePolicyIdResponse
     */
    public function listDistributionsByCachePolicyId(ListDistributionsByCachePolicyIdRequest $args)
    {
        $result = parent::listDistributionsByCachePolicyId($args->toArray());
        return new ListDistributionsByCachePolicyIdResponse($result->toArray());
    }
}
