<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateManagedRuleSetVersionExpiryDate;

trait UpdateManagedRuleSetVersionExpiryDateTrait
{
    /**
     * @param UpdateManagedRuleSetVersionExpiryDateRequest $args
     * @return UpdateManagedRuleSetVersionExpiryDateResponse
     */
    public function updateManagedRuleSetVersionExpiryDate(UpdateManagedRuleSetVersionExpiryDateRequest $args)
    {
        $result = parent::updateManagedRuleSetVersionExpiryDate($args->toArray());
        return new UpdateManagedRuleSetVersionExpiryDateResponse($result->toArray());
    }
}
