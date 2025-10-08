<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutManagedInsightRules;

trait PutManagedInsightRulesTrait
{
    /**
     * @param PutManagedInsightRulesRequest $args
     * @return PutManagedInsightRulesResponse
     */
    public function putManagedInsightRules(PutManagedInsightRulesRequest $args)
    {
        $result = parent::putManagedInsightRules($args->toArray());
        return new PutManagedInsightRulesResponse($result->toArray());
    }
}
