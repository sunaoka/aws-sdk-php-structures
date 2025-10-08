<?php

namespace Sunaoka\Aws\Structures\Ssm\RegisterPatchBaselineForPatchGroup;

trait RegisterPatchBaselineForPatchGroupTrait
{
    /**
     * @param RegisterPatchBaselineForPatchGroupRequest $args
     * @return RegisterPatchBaselineForPatchGroupResponse
     */
    public function registerPatchBaselineForPatchGroup(RegisterPatchBaselineForPatchGroupRequest $args)
    {
        $result = parent::registerPatchBaselineForPatchGroup($args->toArray());
        return new RegisterPatchBaselineForPatchGroupResponse($result->toArray());
    }
}
