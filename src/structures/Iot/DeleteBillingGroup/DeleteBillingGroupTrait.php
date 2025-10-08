<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteBillingGroup;

trait DeleteBillingGroupTrait
{
    /**
     * @param DeleteBillingGroupRequest $args
     * @return DeleteBillingGroupResponse
     */
    public function deleteBillingGroup(DeleteBillingGroupRequest $args)
    {
        $result = parent::deleteBillingGroup($args->toArray());
        return new DeleteBillingGroupResponse($result->toArray());
    }
}
