<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifySecurityGroupRules;

trait ModifySecurityGroupRulesTrait
{
    /**
     * @param ModifySecurityGroupRulesRequest $args
     * @return ModifySecurityGroupRulesResponse
     */
    public function modifySecurityGroupRules(ModifySecurityGroupRulesRequest $args)
    {
        $result = parent::modifySecurityGroupRules($args->toArray());
        return new ModifySecurityGroupRulesResponse($result->toArray());
    }
}
