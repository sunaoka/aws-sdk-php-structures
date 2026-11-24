<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteSnapmirrorPolicy;

trait DeleteSnapmirrorPolicyTrait
{
    /**
     * @param DeleteSnapmirrorPolicyRequest $args
     * @return DeleteSnapmirrorPolicyResponse
     */
    public function deleteSnapmirrorPolicy(DeleteSnapmirrorPolicyRequest $args)
    {
        $result = parent::deleteSnapmirrorPolicy($args->toArray());
        return new DeleteSnapmirrorPolicyResponse($result->toArray());
    }
}
