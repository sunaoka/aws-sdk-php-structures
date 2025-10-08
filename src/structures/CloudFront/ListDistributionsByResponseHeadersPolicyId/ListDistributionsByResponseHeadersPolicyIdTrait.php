<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByResponseHeadersPolicyId;

trait ListDistributionsByResponseHeadersPolicyIdTrait
{
    /**
     * @param ListDistributionsByResponseHeadersPolicyIdRequest $args
     * @return ListDistributionsByResponseHeadersPolicyIdResponse
     */
    public function listDistributionsByResponseHeadersPolicyId(ListDistributionsByResponseHeadersPolicyIdRequest $args)
    {
        $result = parent::listDistributionsByResponseHeadersPolicyId($args->toArray());
        return new ListDistributionsByResponseHeadersPolicyIdResponse($result->toArray());
    }
}
