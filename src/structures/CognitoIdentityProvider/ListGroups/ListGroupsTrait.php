<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListGroups;

trait ListGroupsTrait
{
    /**
     * @param ListGroupsRequest $args
     * @return ListGroupsResponse
     */
    public function listGroups(ListGroupsRequest $args)
    {
        $result = parent::listGroups($args->toArray());
        return new ListGroupsResponse($result->toArray());
    }
}
