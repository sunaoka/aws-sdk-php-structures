<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeAppBlockBuilders;

trait DescribeAppBlockBuildersTrait
{
    /**
     * @param DescribeAppBlockBuildersRequest $args
     * @return DescribeAppBlockBuildersResponse
     */
    public function describeAppBlockBuilders(DescribeAppBlockBuildersRequest $args)
    {
        $result = parent::describeAppBlockBuilders($args->toArray());
        return new DescribeAppBlockBuildersResponse($result->toArray());
    }
}
