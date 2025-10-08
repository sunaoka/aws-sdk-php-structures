<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxScalingGroups;

trait ListKxScalingGroupsTrait
{
    /**
     * @param ListKxScalingGroupsRequest $args
     * @return ListKxScalingGroupsResponse
     */
    public function listKxScalingGroups(ListKxScalingGroupsRequest $args)
    {
        $result = parent::listKxScalingGroups($args->toArray());
        return new ListKxScalingGroupsResponse($result->toArray());
    }
}
