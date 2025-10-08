<?php

namespace Sunaoka\Aws\Structures\Connect\ListTrafficDistributionGroupUsers;

trait ListTrafficDistributionGroupUsersTrait
{
    /**
     * @param ListTrafficDistributionGroupUsersRequest $args
     * @return ListTrafficDistributionGroupUsersResponse
     */
    public function listTrafficDistributionGroupUsers(ListTrafficDistributionGroupUsersRequest $args)
    {
        $result = parent::listTrafficDistributionGroupUsers($args->toArray());
        return new ListTrafficDistributionGroupUsersResponse($result->toArray());
    }
}
