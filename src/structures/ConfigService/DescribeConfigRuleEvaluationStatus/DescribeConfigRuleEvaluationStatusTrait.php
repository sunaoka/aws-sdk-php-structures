<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigRuleEvaluationStatus;

trait DescribeConfigRuleEvaluationStatusTrait
{
    /**
     * @param DescribeConfigRuleEvaluationStatusRequest $args
     * @return DescribeConfigRuleEvaluationStatusResponse
     */
    public function describeConfigRuleEvaluationStatus(DescribeConfigRuleEvaluationStatusRequest $args)
    {
        $result = parent::describeConfigRuleEvaluationStatus($args->toArray());
        return new DescribeConfigRuleEvaluationStatusResponse($result->toArray());
    }
}
