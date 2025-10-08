<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateAutomationRuleV2;

trait CreateAutomationRuleV2Trait
{
    /**
     * @param CreateAutomationRuleV2Request $args
     * @return CreateAutomationRuleV2Response
     */
    public function createAutomationRuleV2(CreateAutomationRuleV2Request $args)
    {
        $result = parent::createAutomationRuleV2($args->toArray());
        return new CreateAutomationRuleV2Response($result->toArray());
    }
}
