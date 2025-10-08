<?php

namespace Sunaoka\Aws\Structures\Ses\CreateReceiptRuleSet;

trait CreateReceiptRuleSetTrait
{
    /**
     * @param CreateReceiptRuleSetRequest $args
     * @return CreateReceiptRuleSetResponse
     */
    public function createReceiptRuleSet(CreateReceiptRuleSetRequest $args)
    {
        $result = parent::createReceiptRuleSet($args->toArray());
        return new CreateReceiptRuleSetResponse($result->toArray());
    }
}
