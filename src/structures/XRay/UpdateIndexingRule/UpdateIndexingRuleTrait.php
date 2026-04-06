<?php

namespace Sunaoka\Aws\Structures\XRay\UpdateIndexingRule;

trait UpdateIndexingRuleTrait
{
    /**
     * @param UpdateIndexingRuleRequest $args
     * @return UpdateIndexingRuleResponse
     */
    public function updateIndexingRule(UpdateIndexingRuleRequest $args)
    {
        $result = parent::updateIndexingRule($args->toArray());
        return new UpdateIndexingRuleResponse($result->toArray());
    }
}
