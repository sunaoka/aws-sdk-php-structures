<?php

namespace Sunaoka\Aws\Structures\MediaConvert\DeletePolicy;

trait DeletePolicyTrait
{
    /**
     * @param DeletePolicyRequest $args
     * @return DeletePolicyResponse
     */
    public function deletePolicy(DeletePolicyRequest $args)
    {
        $result = parent::deletePolicy($args->toArray());
        return new DeletePolicyResponse($result->toArray());
    }
}
