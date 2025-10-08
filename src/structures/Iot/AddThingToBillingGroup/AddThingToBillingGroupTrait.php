<?php

namespace Sunaoka\Aws\Structures\Iot\AddThingToBillingGroup;

trait AddThingToBillingGroupTrait
{
    /**
     * @param AddThingToBillingGroupRequest $args
     * @return AddThingToBillingGroupResponse
     */
    public function addThingToBillingGroup(AddThingToBillingGroupRequest $args)
    {
        $result = parent::addThingToBillingGroup($args->toArray());
        return new AddThingToBillingGroupResponse($result->toArray());
    }
}
