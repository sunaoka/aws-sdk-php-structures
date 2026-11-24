<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteSnapshotPolicy;

trait DeleteSnapshotPolicyTrait
{
    /**
     * @param DeleteSnapshotPolicyRequest $args
     * @return DeleteSnapshotPolicyResponse
     */
    public function deleteSnapshotPolicy(DeleteSnapshotPolicyRequest $args)
    {
        $result = parent::deleteSnapshotPolicy($args->toArray());
        return new DeleteSnapshotPolicyResponse($result->toArray());
    }
}
