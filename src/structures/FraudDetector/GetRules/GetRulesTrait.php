<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetRules;

trait GetRulesTrait
{
    /**
     * @param GetRulesRequest $args
     * @return GetRulesResponse
     */
    public function getRules(GetRulesRequest $args)
    {
        $result = parent::getRules($args->toArray());
        return new GetRulesResponse($result->toArray());
    }
}
