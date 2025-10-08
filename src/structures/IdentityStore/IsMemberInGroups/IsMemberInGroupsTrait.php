<?php

namespace Sunaoka\Aws\Structures\IdentityStore\IsMemberInGroups;

trait IsMemberInGroupsTrait
{
    /**
     * @param IsMemberInGroupsRequest $args
     * @return IsMemberInGroupsResponse
     */
    public function isMemberInGroups(IsMemberInGroupsRequest $args)
    {
        $result = parent::isMemberInGroups($args->toArray());
        return new IsMemberInGroupsResponse($result->toArray());
    }
}
