<?php

namespace Sunaoka\Aws\Structures\CloudWatch\ListManagedInsightRules;

trait ListManagedInsightRulesTrait
{
    /**
     * @param ListManagedInsightRulesRequest $args
     * @return ListManagedInsightRulesResponse
     */
    public function listManagedInsightRules(ListManagedInsightRulesRequest $args)
    {
        $result = parent::listManagedInsightRules($args->toArray());
        return new ListManagedInsightRulesResponse($result->toArray());
    }
}
