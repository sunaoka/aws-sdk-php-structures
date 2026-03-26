<?php

namespace Sunaoka\Aws\Structures\Uxc\UpdateAccountCustomizations;

trait UpdateAccountCustomizationsTrait
{
    /**
     * @param UpdateAccountCustomizationsRequest $args
     * @return UpdateAccountCustomizationsResponse
     */
    public function updateAccountCustomizations(UpdateAccountCustomizationsRequest $args)
    {
        $result = parent::updateAccountCustomizations($args->toArray());
        return new UpdateAccountCustomizationsResponse($result->toArray());
    }
}
