<?php

namespace Sunaoka\Aws\Structures\XRay\GetIndexingRules;

trait GetIndexingRulesTrait
{
    /**
     * @param GetIndexingRulesRequest $args
     * @return GetIndexingRulesResponse
     */
    public function getIndexingRules(GetIndexingRulesRequest $args)
    {
        $result = parent::getIndexingRules($args->toArray());
        return new GetIndexingRulesResponse($result->toArray());
    }
}
