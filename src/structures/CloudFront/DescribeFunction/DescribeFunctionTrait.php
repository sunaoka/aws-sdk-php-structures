<?php

namespace Sunaoka\Aws\Structures\CloudFront\DescribeFunction;

trait DescribeFunctionTrait
{
    /**
     * @param DescribeFunctionRequest $args
     * @return DescribeFunctionResponse
     */
    public function describeFunction(DescribeFunctionRequest $args)
    {
        $result = parent::describeFunction($args->toArray());
        return new DescribeFunctionResponse($result->toArray());
    }
}
