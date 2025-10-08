<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetModelPackageGroupPolicy;

trait GetModelPackageGroupPolicyTrait
{
    /**
     * @param GetModelPackageGroupPolicyRequest $args
     * @return GetModelPackageGroupPolicyResponse
     */
    public function getModelPackageGroupPolicy(GetModelPackageGroupPolicyRequest $args)
    {
        $result = parent::getModelPackageGroupPolicy($args->toArray());
        return new GetModelPackageGroupPolicyResponse($result->toArray());
    }
}
