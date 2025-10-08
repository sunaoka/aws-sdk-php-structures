<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation;

trait DescribeContactEvaluationTrait
{
    /**
     * @param DescribeContactEvaluationRequest $args
     * @return DescribeContactEvaluationResponse
     */
    public function describeContactEvaluation(DescribeContactEvaluationRequest $args)
    {
        $result = parent::describeContactEvaluation($args->toArray());
        return new DescribeContactEvaluationResponse($result->toArray());
    }
}
