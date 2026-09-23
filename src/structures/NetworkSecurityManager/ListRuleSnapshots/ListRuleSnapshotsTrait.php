<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListRuleSnapshots;

trait ListRuleSnapshotsTrait
{
    /**
     * @param ListRuleSnapshotsRequest $args
     * @return ListRuleSnapshotsResponse
     */
    public function listRuleSnapshots(ListRuleSnapshotsRequest $args)
    {
        $result = parent::listRuleSnapshots($args->toArray());
        return new ListRuleSnapshotsResponse($result->toArray());
    }
}
