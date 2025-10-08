<?php

namespace Sunaoka\Aws\Structures\MailManager\ListRuleSets;

trait ListRuleSetsTrait
{
    /**
     * @param ListRuleSetsRequest $args
     * @return ListRuleSetsResponse
     */
    public function listRuleSets(ListRuleSetsRequest $args)
    {
        $result = parent::listRuleSets($args->toArray());
        return new ListRuleSetsResponse($result->toArray());
    }
}
