<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListManagedRuleSets;

trait ListManagedRuleSetsTrait
{
    /**
     * @param ListManagedRuleSetsRequest $args
     * @return ListManagedRuleSetsResponse
     */
    public function listManagedRuleSets(ListManagedRuleSetsRequest $args)
    {
        $result = parent::listManagedRuleSets($args->toArray());
        return new ListManagedRuleSetsResponse($result->toArray());
    }
}
