<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamPolicyAllocationRules;

trait GetIpamPolicyAllocationRulesTrait
{
    /**
     * @param GetIpamPolicyAllocationRulesRequest $args
     * @return GetIpamPolicyAllocationRulesResponse
     */
    public function getIpamPolicyAllocationRules(GetIpamPolicyAllocationRulesRequest $args)
    {
        $result = parent::getIpamPolicyAllocationRules($args->toArray());
        return new GetIpamPolicyAllocationRulesResponse($result->toArray());
    }
}
