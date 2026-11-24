<?php

namespace Sunaoka\Aws\Structures\FSx\CreateSnapmirrorPolicy;

trait CreateSnapmirrorPolicyTrait
{
    /**
     * @param CreateSnapmirrorPolicyRequest $args
     * @return CreateSnapmirrorPolicyResponse
     */
    public function createSnapmirrorPolicy(CreateSnapmirrorPolicyRequest $args)
    {
        $result = parent::createSnapmirrorPolicy($args->toArray());
        return new CreateSnapmirrorPolicyResponse($result->toArray());
    }
}
