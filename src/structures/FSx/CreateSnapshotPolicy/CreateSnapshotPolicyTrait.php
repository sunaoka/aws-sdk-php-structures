<?php

namespace Sunaoka\Aws\Structures\FSx\CreateSnapshotPolicy;

trait CreateSnapshotPolicyTrait
{
    /**
     * @param CreateSnapshotPolicyRequest $args
     * @return CreateSnapshotPolicyResponse
     */
    public function createSnapshotPolicy(CreateSnapshotPolicyRequest $args)
    {
        $result = parent::createSnapshotPolicy($args->toArray());
        return new CreateSnapshotPolicyResponse($result->toArray());
    }
}
