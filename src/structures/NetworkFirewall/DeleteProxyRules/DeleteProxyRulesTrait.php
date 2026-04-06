<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteProxyRules;

trait DeleteProxyRulesTrait
{
    /**
     * @param DeleteProxyRulesRequest $args
     * @return DeleteProxyRulesResponse
     */
    public function deleteProxyRules(DeleteProxyRulesRequest $args)
    {
        $result = parent::deleteProxyRules($args->toArray());
        return new DeleteProxyRulesResponse($result->toArray());
    }
}
