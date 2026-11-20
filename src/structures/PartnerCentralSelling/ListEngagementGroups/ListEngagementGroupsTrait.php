<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementGroups;

trait ListEngagementGroupsTrait
{
    /**
     * @param ListEngagementGroupsRequest $args
     * @return ListEngagementGroupsResponse
     */
    public function listEngagementGroups(ListEngagementGroupsRequest $args)
    {
        $result = parent::listEngagementGroups($args->toArray());
        return new ListEngagementGroupsResponse($result->toArray());
    }
}
