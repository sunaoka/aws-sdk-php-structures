<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeImageBuilders;

trait DescribeImageBuildersTrait
{
    /**
     * @param DescribeImageBuildersRequest $args
     * @return DescribeImageBuildersResponse
     */
    public function describeImageBuilders(DescribeImageBuildersRequest $args)
    {
        $result = parent::describeImageBuilders($args->toArray());
        return new DescribeImageBuildersResponse($result->toArray());
    }
}
