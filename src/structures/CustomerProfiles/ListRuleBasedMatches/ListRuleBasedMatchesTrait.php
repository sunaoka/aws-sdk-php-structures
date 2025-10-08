<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListRuleBasedMatches;

trait ListRuleBasedMatchesTrait
{
    /**
     * @param ListRuleBasedMatchesRequest $args
     * @return ListRuleBasedMatchesResponse
     */
    public function listRuleBasedMatches(ListRuleBasedMatchesRequest $args)
    {
        $result = parent::listRuleBasedMatches($args->toArray());
        return new ListRuleBasedMatchesResponse($result->toArray());
    }
}
