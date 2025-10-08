<?php

namespace Sunaoka\Aws\Structures\Omics\GetS3AccessPolicy;

trait GetS3AccessPolicyTrait
{
    /**
     * @param GetS3AccessPolicyRequest $args
     * @return GetS3AccessPolicyResponse
     */
    public function getS3AccessPolicy(GetS3AccessPolicyRequest $args)
    {
        $result = parent::getS3AccessPolicy($args->toArray());
        return new GetS3AccessPolicyResponse($result->toArray());
    }
}
