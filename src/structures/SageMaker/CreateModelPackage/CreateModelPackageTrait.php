<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelPackage;

trait CreateModelPackageTrait
{
    /**
     * @param CreateModelPackageRequest $args
     * @return CreateModelPackageResponse
     */
    public function createModelPackage(CreateModelPackageRequest $args)
    {
        $result = parent::createModelPackage($args->toArray());
        return new CreateModelPackageResponse($result->toArray());
    }
}
