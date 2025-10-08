<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DeleteAutomationRuleV2;

trait DeleteAutomationRuleV2Trait
{
    /**
     * @param DeleteAutomationRuleV2Request $args
     * @return DeleteAutomationRuleV2Response
     */
    public function deleteAutomationRuleV2(DeleteAutomationRuleV2Request $args)
    {
        $result = parent::deleteAutomationRuleV2($args->toArray());
        return new DeleteAutomationRuleV2Response($result->toArray());
    }
}
