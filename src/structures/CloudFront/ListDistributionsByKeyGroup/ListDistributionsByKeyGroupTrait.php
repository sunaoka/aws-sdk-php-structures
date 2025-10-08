<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByKeyGroup;

trait ListDistributionsByKeyGroupTrait
{
    /**
     * @param ListDistributionsByKeyGroupRequest $args
     * @return ListDistributionsByKeyGroupResponse
     */
    public function listDistributionsByKeyGroup(ListDistributionsByKeyGroupRequest $args)
    {
        $result = parent::listDistributionsByKeyGroup($args->toArray());
        return new ListDistributionsByKeyGroupResponse($result->toArray());
    }
}
