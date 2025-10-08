<?php

namespace Sunaoka\Aws\Structures\Connect\ListTrafficDistributionGroups;

trait ListTrafficDistributionGroupsTrait
{
    /**
     * @param ListTrafficDistributionGroupsRequest $args
     * @return ListTrafficDistributionGroupsResponse
     */
    public function listTrafficDistributionGroups(ListTrafficDistributionGroupsRequest $args)
    {
        $result = parent::listTrafficDistributionGroups($args->toArray());
        return new ListTrafficDistributionGroupsResponse($result->toArray());
    }
}
