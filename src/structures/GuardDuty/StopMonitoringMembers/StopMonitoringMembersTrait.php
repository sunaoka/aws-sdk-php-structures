<?php

namespace Sunaoka\Aws\Structures\GuardDuty\StopMonitoringMembers;

trait StopMonitoringMembersTrait
{
    /**
     * @param StopMonitoringMembersRequest $args
     * @return StopMonitoringMembersResponse
     */
    public function stopMonitoringMembers(StopMonitoringMembersRequest $args)
    {
        $result = parent::stopMonitoringMembers($args->toArray());
        return new StopMonitoringMembersResponse($result->toArray());
    }
}
