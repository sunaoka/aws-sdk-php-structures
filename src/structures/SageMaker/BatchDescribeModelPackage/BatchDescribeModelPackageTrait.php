<?php

namespace Sunaoka\Aws\Structures\SageMaker\BatchDescribeModelPackage;

trait BatchDescribeModelPackageTrait
{
    /**
     * @param BatchDescribeModelPackageRequest $args
     * @return BatchDescribeModelPackageResponse
     */
    public function batchDescribeModelPackage(BatchDescribeModelPackageRequest $args)
    {
        $result = parent::batchDescribeModelPackage($args->toArray());
        return new BatchDescribeModelPackageResponse($result->toArray());
    }
}
