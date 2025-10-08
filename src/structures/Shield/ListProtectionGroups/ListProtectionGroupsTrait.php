<?php

namespace Sunaoka\Aws\Structures\Shield\ListProtectionGroups;

trait ListProtectionGroupsTrait
{
    /**
     * @param ListProtectionGroupsRequest $args
     * @return ListProtectionGroupsResponse
     */
    public function listProtectionGroups(ListProtectionGroupsRequest $args)
    {
        $result = parent::listProtectionGroups($args->toArray());
        return new ListProtectionGroupsResponse($result->toArray());
    }
}
