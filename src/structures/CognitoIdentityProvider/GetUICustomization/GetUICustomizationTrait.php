<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetUICustomization;

trait GetUICustomizationTrait
{
    /**
     * @param GetUICustomizationRequest $args
     * @return GetUICustomizationResponse
     */
    public function getUICustomization(GetUICustomizationRequest $args)
    {
        $result = parent::getUICustomization($args->toArray());
        return new GetUICustomizationResponse($result->toArray());
    }
}
