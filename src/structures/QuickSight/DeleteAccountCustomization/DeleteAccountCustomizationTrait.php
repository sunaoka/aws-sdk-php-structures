<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteAccountCustomization;

trait DeleteAccountCustomizationTrait
{
    /**
     * @param DeleteAccountCustomizationRequest $args
     * @return DeleteAccountCustomizationResponse
     */
    public function deleteAccountCustomization(DeleteAccountCustomizationRequest $args)
    {
        $result = parent::deleteAccountCustomization($args->toArray());
        return new DeleteAccountCustomizationResponse($result->toArray());
    }
}
