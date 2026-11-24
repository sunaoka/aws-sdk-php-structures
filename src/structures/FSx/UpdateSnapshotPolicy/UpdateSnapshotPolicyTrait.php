<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateSnapshotPolicy;

trait UpdateSnapshotPolicyTrait
{
    /**
     * @param UpdateSnapshotPolicyRequest $args
     * @return UpdateSnapshotPolicyResponse
     */
    public function updateSnapshotPolicy(UpdateSnapshotPolicyRequest $args)
    {
        $result = parent::updateSnapshotPolicy($args->toArray());
        return new UpdateSnapshotPolicyResponse($result->toArray());
    }
}
