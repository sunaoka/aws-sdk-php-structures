<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\CreateRuleSnapshot;

trait CreateRuleSnapshotTrait
{
    /**
     * @param CreateRuleSnapshotRequest $args
     * @return CreateRuleSnapshotResponse
     */
    public function createRuleSnapshot(CreateRuleSnapshotRequest $args)
    {
        $result = parent::createRuleSnapshot($args->toArray());
        return new CreateRuleSnapshotResponse($result->toArray());
    }
}
