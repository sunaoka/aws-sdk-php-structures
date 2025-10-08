<?php

namespace Sunaoka\Aws\Structures\Ses\ReorderReceiptRuleSet;

trait ReorderReceiptRuleSetTrait
{
    /**
     * @param ReorderReceiptRuleSetRequest $args
     * @return ReorderReceiptRuleSetResponse
     */
    public function reorderReceiptRuleSet(ReorderReceiptRuleSetRequest $args)
    {
        $result = parent::reorderReceiptRuleSet($args->toArray());
        return new ReorderReceiptRuleSetResponse($result->toArray());
    }
}
