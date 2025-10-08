<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeBillingGroup;

trait DescribeBillingGroupTrait
{
    /**
     * @param DescribeBillingGroupRequest $args
     * @return DescribeBillingGroupResponse
     */
    public function describeBillingGroup(DescribeBillingGroupRequest $args)
    {
        $result = parent::describeBillingGroup($args->toArray());
        return new DescribeBillingGroupResponse($result->toArray());
    }
}
