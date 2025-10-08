<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetAutomationRuleV2;

trait GetAutomationRuleV2Trait
{
    /**
     * @param GetAutomationRuleV2Request $args
     * @return GetAutomationRuleV2Response
     */
    public function getAutomationRuleV2(GetAutomationRuleV2Request $args)
    {
        $result = parent::getAutomationRuleV2($args->toArray());
        return new GetAutomationRuleV2Response($result->toArray());
    }
}
