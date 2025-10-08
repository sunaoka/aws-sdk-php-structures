<?php

namespace Sunaoka\Aws\Structures\Ses\CloneReceiptRuleSet;

trait CloneReceiptRuleSetTrait
{
    /**
     * @param CloneReceiptRuleSetRequest $args
     * @return CloneReceiptRuleSetResponse
     */
    public function cloneReceiptRuleSet(CloneReceiptRuleSetRequest $args)
    {
        $result = parent::cloneReceiptRuleSet($args->toArray());
        return new CloneReceiptRuleSetResponse($result->toArray());
    }
}
