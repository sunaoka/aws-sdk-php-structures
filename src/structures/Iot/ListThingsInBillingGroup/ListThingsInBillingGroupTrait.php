<?php

namespace Sunaoka\Aws\Structures\Iot\ListThingsInBillingGroup;

trait ListThingsInBillingGroupTrait
{
    /**
     * @param ListThingsInBillingGroupRequest $args
     * @return ListThingsInBillingGroupResponse
     */
    public function listThingsInBillingGroup(ListThingsInBillingGroupRequest $args)
    {
        $result = parent::listThingsInBillingGroup($args->toArray());
        return new ListThingsInBillingGroupResponse($result->toArray());
    }
}
