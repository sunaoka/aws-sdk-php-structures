<?php

namespace Sunaoka\Aws\Structures\Transfer\DeleteWebAppCustomization;

trait DeleteWebAppCustomizationTrait
{
    /**
     * @param DeleteWebAppCustomizationRequest $args
     * @return void
     */
    public function deleteWebAppCustomization(DeleteWebAppCustomizationRequest $args)
    {
        parent::deleteWebAppCustomization($args->toArray());
    }
}
