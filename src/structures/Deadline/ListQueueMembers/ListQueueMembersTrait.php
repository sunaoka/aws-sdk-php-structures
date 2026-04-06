<?php

namespace Sunaoka\Aws\Structures\Deadline\ListQueueMembers;

trait ListQueueMembersTrait
{
    /**
     * @param ListQueueMembersRequest $args
     * @return ListQueueMembersResponse
     */
    public function listQueueMembers(ListQueueMembersRequest $args)
    {
        $result = parent::listQueueMembers($args->toArray());
        return new ListQueueMembersResponse($result->toArray());
    }
}
