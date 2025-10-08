<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CheckoutLicense;

trait CheckoutLicenseTrait
{
    /**
     * @param CheckoutLicenseRequest $args
     * @return CheckoutLicenseResponse
     */
    public function checkoutLicense(CheckoutLicenseRequest $args)
    {
        $result = parent::checkoutLicense($args->toArray());
        return new CheckoutLicenseResponse($result->toArray());
    }
}
