<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAccountCustomization;

trait CreateAccountCustomizationTrait
{
    /**
     * @param CreateAccountCustomizationRequest $args
     * @return CreateAccountCustomizationResponse
     */
    public function createAccountCustomization(CreateAccountCustomizationRequest $args)
    {
        $result = parent::createAccountCustomization($args->toArray());
        return new CreateAccountCustomizationResponse($result->toArray());
    }
}
