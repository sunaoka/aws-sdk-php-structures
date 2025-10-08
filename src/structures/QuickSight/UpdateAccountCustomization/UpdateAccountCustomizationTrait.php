<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAccountCustomization;

trait UpdateAccountCustomizationTrait
{
    /**
     * @param UpdateAccountCustomizationRequest $args
     * @return UpdateAccountCustomizationResponse
     */
    public function updateAccountCustomization(UpdateAccountCustomizationRequest $args)
    {
        $result = parent::updateAccountCustomization($args->toArray());
        return new UpdateAccountCustomizationResponse($result->toArray());
    }
}
