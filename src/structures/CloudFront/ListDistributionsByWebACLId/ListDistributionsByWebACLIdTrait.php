<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByWebACLId;

trait ListDistributionsByWebACLIdTrait
{
    /**
     * @param ListDistributionsByWebACLIdRequest $args
     * @return ListDistributionsByWebACLIdResponse
     */
    public function listDistributionsByWebACLId(ListDistributionsByWebACLIdRequest $args)
    {
        $result = parent::listDistributionsByWebACLId($args->toArray());
        return new ListDistributionsByWebACLIdResponse($result->toArray());
    }
}
