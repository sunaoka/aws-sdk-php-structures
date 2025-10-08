<?php

namespace Sunaoka\Aws\Structures\Iot\ListBillingGroups;

trait ListBillingGroupsTrait
{
    /**
     * @param ListBillingGroupsRequest $args
     * @return ListBillingGroupsResponse
     */
    public function listBillingGroups(ListBillingGroupsRequest $args)
    {
        $result = parent::listBillingGroups($args->toArray());
        return new ListBillingGroupsResponse($result->toArray());
    }
}
