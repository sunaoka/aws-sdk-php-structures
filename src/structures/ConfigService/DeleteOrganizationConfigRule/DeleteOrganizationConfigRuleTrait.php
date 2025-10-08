<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteOrganizationConfigRule;

trait DeleteOrganizationConfigRuleTrait
{
    /**
     * @param DeleteOrganizationConfigRuleRequest $args
     * @return void
     */
    public function deleteOrganizationConfigRule(DeleteOrganizationConfigRuleRequest $args)
    {
        parent::deleteOrganizationConfigRule($args->toArray());
    }
}
