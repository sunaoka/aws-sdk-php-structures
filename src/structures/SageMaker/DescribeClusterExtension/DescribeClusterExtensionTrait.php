<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterExtension;

trait DescribeClusterExtensionTrait
{
    /**
     * @param DescribeClusterExtensionRequest $args
     * @return DescribeClusterExtensionResponse
     */
    public function describeClusterExtension(DescribeClusterExtensionRequest $args)
    {
        $result = parent::describeClusterExtension($args->toArray());
        return new DescribeClusterExtensionResponse($result->toArray());
    }
}
