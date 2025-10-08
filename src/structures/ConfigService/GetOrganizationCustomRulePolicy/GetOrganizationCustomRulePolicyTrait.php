<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetOrganizationCustomRulePolicy;

trait GetOrganizationCustomRulePolicyTrait
{
    /**
     * @param GetOrganizationCustomRulePolicyRequest $args
     * @return GetOrganizationCustomRulePolicyResponse
     */
    public function getOrganizationCustomRulePolicy(GetOrganizationCustomRulePolicyRequest $args)
    {
        $result = parent::getOrganizationCustomRulePolicy($args->toArray());
        return new GetOrganizationCustomRulePolicyResponse($result->toArray());
    }
}
