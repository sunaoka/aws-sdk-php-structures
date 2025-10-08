<?php

namespace Sunaoka\Aws\Structures\WorkMail\DeleteRetentionPolicy;

trait DeleteRetentionPolicyTrait
{
    /**
     * @param DeleteRetentionPolicyRequest $args
     * @return DeleteRetentionPolicyResponse
     */
    public function deleteRetentionPolicy(DeleteRetentionPolicyRequest $args)
    {
        $result = parent::deleteRetentionPolicy($args->toArray());
        return new DeleteRetentionPolicyResponse($result->toArray());
    }
}
