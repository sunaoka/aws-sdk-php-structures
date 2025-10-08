<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeFileSystems;

trait DescribeFileSystemsTrait
{
    /**
     * @param DescribeFileSystemsRequest $args
     * @return DescribeFileSystemsResponse
     */
    public function describeFileSystems(DescribeFileSystemsRequest $args)
    {
        $result = parent::describeFileSystems($args->toArray());
        return new DescribeFileSystemsResponse($result->toArray());
    }
}
