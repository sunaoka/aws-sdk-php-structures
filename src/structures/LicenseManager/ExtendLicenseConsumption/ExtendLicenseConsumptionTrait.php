<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ExtendLicenseConsumption;

trait ExtendLicenseConsumptionTrait
{
    /**
     * @param ExtendLicenseConsumptionRequest $args
     * @return ExtendLicenseConsumptionResponse
     */
    public function extendLicenseConsumption(ExtendLicenseConsumptionRequest $args)
    {
        $result = parent::extendLicenseConsumption($args->toArray());
        return new ExtendLicenseConsumptionResponse($result->toArray());
    }
}
