<?php

namespace Sunaoka\Aws\Structures\BillingConductor\CreateBillingGroup;

trait CreateBillingGroupTrait
{
    /**
     * @param CreateBillingGroupRequest $args
     * @return CreateBillingGroupResponse
     */
    public function createBillingGroup(CreateBillingGroupRequest $args)
    {
        $result = parent::createBillingGroup($args->toArray());
        return new CreateBillingGroupResponse($result->toArray());
    }
}
