<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeAlgorithm;

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
