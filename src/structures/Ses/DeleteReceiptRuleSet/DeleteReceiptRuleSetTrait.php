<?php

namespace Sunaoka\Aws\Structures\Ses\DeleteReceiptRuleSet;

trait DeleteReceiptRuleSetTrait
{
    /**
     * @param DeleteReceiptRuleSetRequest $args
     * @return DeleteReceiptRuleSetResponse
     */
    public function deleteReceiptRuleSet(DeleteReceiptRuleSetRequest $args)
    {
        $result = parent::deleteReceiptRuleSet($args->toArray());
        return new DeleteReceiptRuleSetResponse($result->toArray());
    }
}
