<?php

namespace Sunaoka\Aws\Structures\kendra\ListGroupsOlderThanOrderingId;

trait ListGroupsOlderThanOrderingIdTrait
{
    /**
     * @param ListGroupsOlderThanOrderingIdRequest $args
     * @return ListGroupsOlderThanOrderingIdResponse
     */
    public function listGroupsOlderThanOrderingId(ListGroupsOlderThanOrderingIdRequest $args)
    {
        $result = parent::listGroupsOlderThanOrderingId($args->toArray());
        return new ListGroupsOlderThanOrderingIdResponse($result->toArray());
    }
}
