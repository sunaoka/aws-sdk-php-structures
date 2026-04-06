<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateWebAppCustomization;

trait UpdateWebAppCustomizationTrait
{
    /**
     * @param UpdateWebAppCustomizationRequest $args
     * @return UpdateWebAppCustomizationResponse
     */
    public function updateWebAppCustomization(UpdateWebAppCustomizationRequest $args)
    {
        $result = parent::updateWebAppCustomization($args->toArray());
        return new UpdateWebAppCustomizationResponse($result->toArray());
    }
}
