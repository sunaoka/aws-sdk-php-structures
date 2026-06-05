<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListUsersIndexCapacity;

trait ListUsersIndexCapacityTrait
{
    /**
     * @param ListUsersIndexCapacityRequest $args
     * @return ListUsersIndexCapacityResponse
     */
    public function listUsersIndexCapacity(ListUsersIndexCapacityRequest $args)
    {
        $result = parent::listUsersIndexCapacity($args->toArray());
        return new ListUsersIndexCapacityResponse($result->toArray());
    }
}
