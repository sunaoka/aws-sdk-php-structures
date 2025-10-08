<?php

namespace Sunaoka\Aws\Structures\SageMaker\PutModelPackageGroupPolicy;

trait PutModelPackageGroupPolicyTrait
{
    /**
     * @param PutModelPackageGroupPolicyRequest $args
     * @return PutModelPackageGroupPolicyResponse
     */
    public function putModelPackageGroupPolicy(PutModelPackageGroupPolicyRequest $args)
    {
        $result = parent::putModelPackageGroupPolicy($args->toArray());
        return new PutModelPackageGroupPolicyResponse($result->toArray());
    }
}
