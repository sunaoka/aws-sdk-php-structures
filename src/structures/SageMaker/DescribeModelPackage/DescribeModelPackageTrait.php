<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelPackage;

trait DescribeModelPackageTrait
{
    /**
     * @param DescribeModelPackageRequest $args
     * @return DescribeModelPackageResponse
     */
    public function describeModelPackage(DescribeModelPackageRequest $args)
    {
        $result = parent::describeModelPackage($args->toArray());
        return new DescribeModelPackageResponse($result->toArray());
    }
}
