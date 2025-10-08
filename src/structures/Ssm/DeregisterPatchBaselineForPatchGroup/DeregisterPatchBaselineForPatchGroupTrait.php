<?php

namespace Sunaoka\Aws\Structures\Ssm\DeregisterPatchBaselineForPatchGroup;

trait DeregisterPatchBaselineForPatchGroupTrait
{
    /**
     * @param DeregisterPatchBaselineForPatchGroupRequest $args
     * @return DeregisterPatchBaselineForPatchGroupResponse
     */
    public function deregisterPatchBaselineForPatchGroup(DeregisterPatchBaselineForPatchGroupRequest $args)
    {
        $result = parent::deregisterPatchBaselineForPatchGroup($args->toArray());
        return new DeregisterPatchBaselineForPatchGroupResponse($result->toArray());
    }
}
