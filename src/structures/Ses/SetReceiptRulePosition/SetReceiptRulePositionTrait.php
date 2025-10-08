<?php

namespace Sunaoka\Aws\Structures\Ses\SetReceiptRulePosition;

trait SetReceiptRulePositionTrait
{
    /**
     * @param SetReceiptRulePositionRequest $args
     * @return SetReceiptRulePositionResponse
     */
    public function setReceiptRulePosition(SetReceiptRulePositionRequest $args)
    {
        $result = parent::setReceiptRulePosition($args->toArray());
        return new SetReceiptRulePositionResponse($result->toArray());
    }
}
