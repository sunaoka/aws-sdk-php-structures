<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteModelPackage;

trait DeleteModelPackageTrait
{
    /**
     * @param DeleteModelPackageRequest $args
     * @return void
     */
    public function deleteModelPackage(DeleteModelPackageRequest $args)
    {
        parent::deleteModelPackage($args->toArray());
    }
}
