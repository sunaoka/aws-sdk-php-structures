<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackResource;

trait DescribeStackResourceTrait
{
    /**
     * @param DescribeStackResourceRequest $args
     * @return DescribeStackResourceResponse
     */
    public function describeStackResource(DescribeStackResourceRequest $args)
    {
        $result = parent::describeStackResource($args->toArray());
        return new DescribeStackResourceResponse($result->toArray());
    }
}
