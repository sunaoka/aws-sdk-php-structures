<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeSpace;

trait DescribeSpaceTrait
{
    /**
     * @param DescribeSpaceRequest $args
     * @return DescribeSpaceResponse
     */
    public function describeSpace(DescribeSpaceRequest $args)
    {
        $result = parent::describeSpace($args->toArray());
        return new DescribeSpaceResponse($result->toArray());
    }
}
