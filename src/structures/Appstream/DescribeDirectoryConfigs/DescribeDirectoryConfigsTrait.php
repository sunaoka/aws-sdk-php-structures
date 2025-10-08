<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeDirectoryConfigs;

trait DescribeDirectoryConfigsTrait
{
    /**
     * @param DescribeDirectoryConfigsRequest $args
     * @return DescribeDirectoryConfigsResponse
     */
    public function describeDirectoryConfigs(DescribeDirectoryConfigsRequest $args)
    {
        $result = parent::describeDirectoryConfigs($args->toArray());
        return new DescribeDirectoryConfigsResponse($result->toArray());
    }
}
