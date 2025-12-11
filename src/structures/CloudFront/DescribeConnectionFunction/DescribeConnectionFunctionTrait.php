<?php

namespace Sunaoka\Aws\Structures\CloudFront\DescribeConnectionFunction;

trait DescribeConnectionFunctionTrait
{
    /**
     * @param DescribeConnectionFunctionRequest $args
     * @return DescribeConnectionFunctionResponse
     */
    public function describeConnectionFunction(DescribeConnectionFunctionRequest $args)
    {
        $result = parent::describeConnectionFunction($args->toArray());
        return new DescribeConnectionFunctionResponse($result->toArray());
    }
}
