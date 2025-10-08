<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAlgorithm;

trait DescribeAlgorithmTrait
{
    /**
     * @param DescribeAlgorithmRequest $args
     * @return DescribeAlgorithmResponse
     */
    public function describeAlgorithm(DescribeAlgorithmRequest $args)
    {
        $result = parent::describeAlgorithm($args->toArray());
        return new DescribeAlgorithmResponse($result->toArray());
    }
}
