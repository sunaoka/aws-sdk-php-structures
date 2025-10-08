<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByOriginRequestPolicyId;

trait ListDistributionsByOriginRequestPolicyIdTrait
{
    /**
     * @param ListDistributionsByOriginRequestPolicyIdRequest $args
     * @return ListDistributionsByOriginRequestPolicyIdResponse
     */
    public function listDistributionsByOriginRequestPolicyId(ListDistributionsByOriginRequestPolicyIdRequest $args)
    {
        $result = parent::listDistributionsByOriginRequestPolicyId($args->toArray());
        return new ListDistributionsByOriginRequestPolicyIdResponse($result->toArray());
    }
}
