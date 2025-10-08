<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CheckoutBorrowLicense;

trait CheckoutBorrowLicenseTrait
{
    /**
     * @param CheckoutBorrowLicenseRequest $args
     * @return CheckoutBorrowLicenseResponse
     */
    public function checkoutBorrowLicense(CheckoutBorrowLicenseRequest $args)
    {
        $result = parent::checkoutBorrowLicense($args->toArray());
        return new CheckoutBorrowLicenseResponse($result->toArray());
    }
}
