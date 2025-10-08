<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribePackages;

trait DescribePackagesTrait
{
    /**
     * @param DescribePackagesRequest $args
     * @return DescribePackagesResponse
     */
    public function describePackages(DescribePackagesRequest $args)
    {
        $result = parent::describePackages($args->toArray());
        return new DescribePackagesResponse($result->toArray());
    }
}
