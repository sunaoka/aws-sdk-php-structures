<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateModelPackage;

trait UpdateModelPackageTrait
{
    /**
     * @param UpdateModelPackageRequest $args
     * @return UpdateModelPackageResponse
     */
    public function updateModelPackage(UpdateModelPackageRequest $args)
    {
        $result = parent::updateModelPackage($args->toArray());
        return new UpdateModelPackageResponse($result->toArray());
    }
}
