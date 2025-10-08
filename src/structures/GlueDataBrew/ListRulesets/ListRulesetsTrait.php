<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListRulesets;

trait ListRulesetsTrait
{
    /**
     * @param ListRulesetsRequest $args
     * @return ListRulesetsResponse
     */
    public function listRulesets(ListRulesetsRequest $args)
    {
        $result = parent::listRulesets($args->toArray());
        return new ListRulesetsResponse($result->toArray());
    }
}
