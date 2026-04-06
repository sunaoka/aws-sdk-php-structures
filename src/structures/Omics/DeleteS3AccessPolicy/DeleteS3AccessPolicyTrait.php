<?php

namespace Sunaoka\Aws\Structures\Omics\DeleteS3AccessPolicy;

trait DeleteS3AccessPolicyTrait
{
    /**
     * @param DeleteS3AccessPolicyRequest $args
     * @return DeleteS3AccessPolicyResponse
     */
    public function deleteS3AccessPolicy(DeleteS3AccessPolicyRequest $args)
    {
        $result = parent::deleteS3AccessPolicy($args->toArray());
        return new DeleteS3AccessPolicyResponse($result->toArray());
    }
}
