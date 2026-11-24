<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateSnapmirrorPolicy;

trait UpdateSnapmirrorPolicyTrait
{
    /**
     * @param UpdateSnapmirrorPolicyRequest $args
     * @return UpdateSnapmirrorPolicyResponse
     */
    public function updateSnapmirrorPolicy(UpdateSnapmirrorPolicyRequest $args)
    {
        $result = parent::updateSnapmirrorPolicy($args->toArray());
        return new UpdateSnapmirrorPolicyResponse($result->toArray());
    }
}
