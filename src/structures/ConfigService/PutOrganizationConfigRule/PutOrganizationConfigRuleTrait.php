<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutOrganizationConfigRule;

trait PutOrganizationConfigRuleTrait
{
    /**
     * @param PutOrganizationConfigRuleRequest $args
     * @return PutOrganizationConfigRuleResponse
     */
    public function putOrganizationConfigRule(PutOrganizationConfigRuleRequest $args)
    {
        $result = parent::putOrganizationConfigRule($args->toArray());
        return new PutOrganizationConfigRuleResponse($result->toArray());
    }
}
