<?php

namespace Sunaoka\Aws\Structures\Rekognition\DeleteProjectPolicy;

trait DeleteProjectPolicyTrait
{
    /**
     * @param DeleteProjectPolicyRequest $args
     * @return DeleteProjectPolicyResponse
     */
    public function deleteProjectPolicy(DeleteProjectPolicyRequest $args)
    {
        $result = parent::deleteProjectPolicy($args->toArray());
        return new DeleteProjectPolicyResponse($result->toArray());
    }
}
