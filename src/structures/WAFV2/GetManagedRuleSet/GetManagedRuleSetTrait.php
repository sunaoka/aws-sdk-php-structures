<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetManagedRuleSet;

trait GetManagedRuleSetTrait
{
    /**
     * @param GetManagedRuleSetRequest $args
     * @return GetManagedRuleSetResponse
     */
    public function getManagedRuleSet(GetManagedRuleSetRequest $args)
    {
        $result = parent::getManagedRuleSet($args->toArray());
        return new GetManagedRuleSetResponse($result->toArray());
    }
}
