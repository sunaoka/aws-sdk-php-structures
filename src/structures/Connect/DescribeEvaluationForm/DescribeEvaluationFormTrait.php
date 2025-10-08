<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeEvaluationForm;

trait DescribeEvaluationFormTrait
{
    /**
     * @param DescribeEvaluationFormRequest $args
     * @return DescribeEvaluationFormResponse
     */
    public function describeEvaluationForm(DescribeEvaluationFormRequest $args)
    {
        $result = parent::describeEvaluationForm($args->toArray());
        return new DescribeEvaluationFormResponse($result->toArray());
    }
}
