<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribePackageVersion;

trait DescribePackageVersionTrait
{
    /**
     * @param DescribePackageVersionRequest $args
     * @return DescribePackageVersionResponse
     */
    public function describePackageVersion(DescribePackageVersionRequest $args)
    {
        $result = parent::describePackageVersion($args->toArray());
        return new DescribePackageVersionResponse($result->toArray());
    }
}
