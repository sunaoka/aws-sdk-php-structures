<?php

namespace Sunaoka\Aws\Structures\Iot\RemoveThingFromBillingGroup;

trait RemoveThingFromBillingGroupTrait
{
    /**
     * @param RemoveThingFromBillingGroupRequest $args
     * @return RemoveThingFromBillingGroupResponse
     */
    public function removeThingFromBillingGroup(RemoveThingFromBillingGroupRequest $args)
    {
        $result = parent::removeThingFromBillingGroup($args->toArray());
        return new RemoveThingFromBillingGroupResponse($result->toArray());
    }
}
