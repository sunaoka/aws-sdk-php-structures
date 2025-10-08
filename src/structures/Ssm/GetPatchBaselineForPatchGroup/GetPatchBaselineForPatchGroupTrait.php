<?php

namespace Sunaoka\Aws\Structures\Ssm\GetPatchBaselineForPatchGroup;

trait GetPatchBaselineForPatchGroupTrait
{
    /**
     * @param GetPatchBaselineForPatchGroupRequest $args
     * @return GetPatchBaselineForPatchGroupResponse
     */
    public function getPatchBaselineForPatchGroup(GetPatchBaselineForPatchGroupRequest $args)
    {
        $result = parent::getPatchBaselineForPatchGroup($args->toArray());
        return new GetPatchBaselineForPatchGroupResponse($result->toArray());
    }
}
