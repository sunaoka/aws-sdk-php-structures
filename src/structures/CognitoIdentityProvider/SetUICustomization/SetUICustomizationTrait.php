<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetUICustomization;

trait SetUICustomizationTrait
{
    /**
     * @param SetUICustomizationRequest $args
     * @return SetUICustomizationResponse
     */
    public function setUICustomization(SetUICustomizationRequest $args)
    {
        $result = parent::setUICustomization($args->toArray());
        return new SetUICustomizationResponse($result->toArray());
    }
}
