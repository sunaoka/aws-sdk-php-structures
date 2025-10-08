<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DescribeEvaluations;

trait DescribeEvaluationsTrait
{
    /**
     * @param DescribeEvaluationsRequest $args
     * @return DescribeEvaluationsResponse
     */
    public function describeEvaluations(DescribeEvaluationsRequest $args)
    {
        $result = parent::describeEvaluations($args->toArray());
        return new DescribeEvaluationsResponse($result->toArray());
    }
}
