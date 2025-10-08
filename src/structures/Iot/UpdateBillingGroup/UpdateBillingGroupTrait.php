<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateBillingGroup;

trait UpdateBillingGroupTrait
{
    /**
     * @param UpdateBillingGroupRequest $args
     * @return UpdateBillingGroupResponse
     */
    public function updateBillingGroup(UpdateBillingGroupRequest $args)
    {
        $result = parent::updateBillingGroup($args->toArray());
        return new UpdateBillingGroupResponse($result->toArray());
    }
}
