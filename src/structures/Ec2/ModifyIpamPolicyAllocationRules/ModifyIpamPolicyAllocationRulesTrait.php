<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamPolicyAllocationRules;

trait ModifyIpamPolicyAllocationRulesTrait
{
    /**
     * @param ModifyIpamPolicyAllocationRulesRequest $args
     * @return ModifyIpamPolicyAllocationRulesResponse
     */
    public function modifyIpamPolicyAllocationRules(ModifyIpamPolicyAllocationRulesRequest $args)
    {
        $result = parent::modifyIpamPolicyAllocationRules($args->toArray());
        return new ModifyIpamPolicyAllocationRulesResponse($result->toArray());
    }
}
