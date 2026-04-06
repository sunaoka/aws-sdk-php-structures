<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateAutomationRuleV2;

trait UpdateAutomationRuleV2Trait
{
    /**
     * @param UpdateAutomationRuleV2Request $args
     * @return UpdateAutomationRuleV2Response
     */
    public function updateAutomationRuleV2(UpdateAutomationRuleV2Request $args)
    {
        $result = parent::updateAutomationRuleV2($args->toArray());
        return new UpdateAutomationRuleV2Response($result->toArray());
    }
}
