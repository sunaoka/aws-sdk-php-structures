<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DisableInsightRules;

trait DisableInsightRulesTrait
{
    /**
     * @param DisableInsightRulesRequest $args
     * @return DisableInsightRulesResponse
     */
    public function disableInsightRules(DisableInsightRulesRequest $args)
    {
        $result = parent::disableInsightRules($args->toArray());
        return new DisableInsightRulesResponse($result->toArray());
    }
}
