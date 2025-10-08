<?php

namespace Sunaoka\Aws\Structures\Ses\SetActiveReceiptRuleSet;

trait SetActiveReceiptRuleSetTrait
{
    /**
     * @param SetActiveReceiptRuleSetRequest $args
     * @return SetActiveReceiptRuleSetResponse
     */
    public function setActiveReceiptRuleSet(SetActiveReceiptRuleSetRequest $args)
    {
        $result = parent::setActiveReceiptRuleSet($args->toArray());
        return new SetActiveReceiptRuleSetResponse($result->toArray());
    }
}
