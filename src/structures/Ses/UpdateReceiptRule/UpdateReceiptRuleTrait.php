<?php

namespace Sunaoka\Aws\Structures\Ses\UpdateReceiptRule;

trait UpdateReceiptRuleTrait
{
    /**
     * @param UpdateReceiptRuleRequest $args
     * @return UpdateReceiptRuleResponse
     */
    public function updateReceiptRule(UpdateReceiptRuleRequest $args)
    {
        $result = parent::updateReceiptRule($args->toArray());
        return new UpdateReceiptRuleResponse($result->toArray());
    }
}
