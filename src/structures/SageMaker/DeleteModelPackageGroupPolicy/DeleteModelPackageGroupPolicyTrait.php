<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteModelPackageGroupPolicy;

trait DeleteModelPackageGroupPolicyTrait
{
    /**
     * @param DeleteModelPackageGroupPolicyRequest $args
     * @return void
     */
    public function deleteModelPackageGroupPolicy(DeleteModelPackageGroupPolicyRequest $args)
    {
        parent::deleteModelPackageGroupPolicy($args->toArray());
    }
}
