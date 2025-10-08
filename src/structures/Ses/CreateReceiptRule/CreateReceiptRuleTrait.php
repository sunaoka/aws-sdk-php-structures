<?php

namespace Sunaoka\Aws\Structures\Ses\CreateReceiptRule;

trait CreateReceiptRuleTrait
{
    /**
     * @param CreateReceiptRuleRequest $args
     * @return CreateReceiptRuleResponse
     */
    public function createReceiptRule(CreateReceiptRuleRequest $args)
    {
        $result = parent::createReceiptRule($args->toArray());
        return new CreateReceiptRuleResponse($result->toArray());
    }
}
