<?php

namespace Sunaoka\Aws\Structures\Omics\PutS3AccessPolicy;

trait PutS3AccessPolicyTrait
{
    /**
     * @param PutS3AccessPolicyRequest $args
     * @return PutS3AccessPolicyResponse
     */
    public function putS3AccessPolicy(PutS3AccessPolicyRequest $args)
    {
        $result = parent::putS3AccessPolicy($args->toArray());
        return new PutS3AccessPolicyResponse($result->toArray());
    }
}
