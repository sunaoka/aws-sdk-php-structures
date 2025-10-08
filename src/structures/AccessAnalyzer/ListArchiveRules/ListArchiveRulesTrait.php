<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListArchiveRules;

trait ListArchiveRulesTrait
{
    /**
     * @param ListArchiveRulesRequest $args
     * @return ListArchiveRulesResponse
     */
    public function listArchiveRules(ListArchiveRulesRequest $args)
    {
        $result = parent::listArchiveRules($args->toArray());
        return new ListArchiveRulesResponse($result->toArray());
    }
}
