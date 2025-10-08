<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteModelPackageGroup;

trait DeleteModelPackageGroupTrait
{
    /**
     * @param DeleteModelPackageGroupRequest $args
     * @return void
     */
    public function deleteModelPackageGroup(DeleteModelPackageGroupRequest $args)
    {
        parent::deleteModelPackageGroup($args->toArray());
    }
}
