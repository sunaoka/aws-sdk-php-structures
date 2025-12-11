<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\GetTargetSelectionRules;

trait GetTargetSelectionRulesTrait
{
    /**
     * @param GetTargetSelectionRulesRequest $args
     * @return GetTargetSelectionRulesResponse
     */
    public function getTargetSelectionRules(GetTargetSelectionRulesRequest $args)
    {
        $result = parent::getTargetSelectionRules($args->toArray());
        return new GetTargetSelectionRulesResponse($result->toArray());
    }
}
