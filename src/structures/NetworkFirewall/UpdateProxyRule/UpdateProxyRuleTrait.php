<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateProxyRule;

trait UpdateProxyRuleTrait
{
    /**
     * @param UpdateProxyRuleRequest $args
     * @return UpdateProxyRuleResponse
     */
    public function updateProxyRule(UpdateProxyRuleRequest $args)
    {
        $result = parent::updateProxyRule($args->toArray());
        return new UpdateProxyRuleResponse($result->toArray());
    }
}
