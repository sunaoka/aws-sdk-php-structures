<?php

namespace Sunaoka\Aws\Structures\Ses\DeleteReceiptRule;

trait DeleteReceiptRuleTrait
{
    /**
     * @param DeleteReceiptRuleRequest $args
     * @return DeleteReceiptRuleResponse
     */
    public function deleteReceiptRule(DeleteReceiptRuleRequest $args)
    {
        $result = parent::deleteReceiptRule($args->toArray());
        return new DeleteReceiptRuleResponse($result->toArray());
    }
}
