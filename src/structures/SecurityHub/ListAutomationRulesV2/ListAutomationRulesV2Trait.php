<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListAutomationRulesV2;

trait ListAutomationRulesV2Trait
{
    /**
     * @param ListAutomationRulesV2Request $args
     * @return ListAutomationRulesV2Response
     */
    public function listAutomationRulesV2(ListAutomationRulesV2Request $args)
    {
        $result = parent::listAutomationRulesV2($args->toArray());
        return new ListAutomationRulesV2Response($result->toArray());
    }
}
