<?php

namespace Sunaoka\Aws\Structures\Deadline\ListJobMembers;

trait ListJobMembersTrait
{
    /**
     * @param ListJobMembersRequest $args
     * @return ListJobMembersResponse
     */
    public function listJobMembers(ListJobMembersRequest $args)
    {
        $result = parent::listJobMembers($args->toArray());
        return new ListJobMembersResponse($result->toArray());
    }
}
