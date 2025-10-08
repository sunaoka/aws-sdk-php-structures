<?php

namespace Sunaoka\Aws\Structures\Connect\CreateTrafficDistributionGroup;

trait CreateTrafficDistributionGroupTrait
{
    /**
     * @param CreateTrafficDistributionGroupRequest $args
     * @return CreateTrafficDistributionGroupResponse
     */
    public function createTrafficDistributionGroup(CreateTrafficDistributionGroupRequest $args)
    {
        $result = parent::createTrafficDistributionGroup($args->toArray());
        return new CreateTrafficDistributionGroupResponse($result->toArray());
    }
}
