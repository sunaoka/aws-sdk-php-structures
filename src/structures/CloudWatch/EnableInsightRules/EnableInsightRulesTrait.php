<?php

namespace Sunaoka\Aws\Structures\CloudWatch\EnableInsightRules;

trait EnableInsightRulesTrait
{
    /**
     * @param EnableInsightRulesRequest $args
     * @return EnableInsightRulesResponse
     */
    public function enableInsightRules(EnableInsightRulesRequest $args)
    {
        $result = parent::enableInsightRules($args->toArray());
        return new EnableInsightRulesResponse($result->toArray());
    }
}
