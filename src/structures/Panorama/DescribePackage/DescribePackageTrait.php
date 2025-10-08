<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribePackage;

trait DescribePackageTrait
{
    /**
     * @param DescribePackageRequest $args
     * @return DescribePackageResponse
     */
    public function describePackage(DescribePackageRequest $args)
    {
        $result = parent::describePackage($args->toArray());
        return new DescribePackageResponse($result->toArray());
    }
}
