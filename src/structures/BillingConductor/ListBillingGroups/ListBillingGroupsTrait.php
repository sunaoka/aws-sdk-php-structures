<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListBillingGroups;

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
