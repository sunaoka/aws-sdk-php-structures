<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetCustomRulePolicy;

trait GetCustomRulePolicyTrait
{
    /**
     * @param GetCustomRulePolicyRequest $args
     * @return GetCustomRulePolicyResponse
     */
    public function getCustomRulePolicy(GetCustomRulePolicyRequest $args)
    {
        $result = parent::getCustomRulePolicy($args->toArray());
        return new GetCustomRulePolicyResponse($result->toArray());
    }
}
