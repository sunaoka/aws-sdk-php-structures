<?php

namespace Sunaoka\Aws\Structures\Uxc\GetAccountCustomizations;

trait GetAccountCustomizationsTrait
{
    /**
     * @param GetAccountCustomizationsRequest $args
     * @return GetAccountCustomizationsResponse
     */
    public function getAccountCustomizations(GetAccountCustomizationsRequest $args)
    {
        $result = parent::getAccountCustomizations($args->toArray());
        return new GetAccountCustomizationsResponse($result->toArray());
    }
}
