<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeImageVersion;

trait DescribeImageVersionTrait
{
    /**
     * @param DescribeImageVersionRequest $args
     * @return DescribeImageVersionResponse
     */
    public function describeImageVersion(DescribeImageVersionRequest $args)
    {
        $result = parent::describeImageVersion($args->toArray());
        return new DescribeImageVersionResponse($result->toArray());
    }
}
