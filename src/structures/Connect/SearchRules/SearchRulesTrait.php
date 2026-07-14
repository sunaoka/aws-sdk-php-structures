<?php

namespace Sunaoka\Aws\Structures\Connect\SearchRules;

trait SearchRulesTrait
{
    /**
     * @param SearchRulesRequest $args
     * @return SearchRulesResponse
     */
    public function searchRules(SearchRulesRequest $args)
    {
        $result = parent::searchRules($args->toArray());
        return new SearchRulesResponse($result->toArray());
    }
}
