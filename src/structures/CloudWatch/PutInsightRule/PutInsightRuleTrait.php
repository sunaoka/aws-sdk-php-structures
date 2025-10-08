<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutInsightRule;

trait PutInsightRuleTrait
{
    /**
     * @param PutInsightRuleRequest $args
     * @return PutInsightRuleResponse
     */
    public function putInsightRule(PutInsightRuleRequest $args)
    {
        $result = parent::putInsightRule($args->toArray());
        return new PutInsightRuleResponse($result->toArray());
    }
}
