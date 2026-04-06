<?php

namespace Sunaoka\Aws\Structures\Deadline\ListFleetMembers;

trait ListFleetMembersTrait
{
    /**
     * @param ListFleetMembersRequest $args
     * @return ListFleetMembersResponse
     */
    public function listFleetMembers(ListFleetMembersRequest $args)
    {
        $result = parent::listFleetMembers($args->toArray());
        return new ListFleetMembersResponse($result->toArray());
    }
}
