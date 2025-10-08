<?php

namespace Sunaoka\Aws\Structures\GuardDuty\StartMonitoringMembers;

trait StartMonitoringMembersTrait
{
    /**
     * @param StartMonitoringMembersRequest $args
     * @return StartMonitoringMembersResponse
     */
    public function startMonitoringMembers(StartMonitoringMembersRequest $args)
    {
        $result = parent::startMonitoringMembers($args->toArray());
        return new StartMonitoringMembersResponse($result->toArray());
    }
}
