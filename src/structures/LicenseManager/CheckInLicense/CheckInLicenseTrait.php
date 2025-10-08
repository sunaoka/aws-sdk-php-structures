<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CheckInLicense;

trait CheckInLicenseTrait
{
    /**
     * @param CheckInLicenseRequest $args
     * @return CheckInLicenseResponse
     */
    public function checkInLicense(CheckInLicenseRequest $args)
    {
        $result = parent::checkInLicense($args->toArray());
        return new CheckInLicenseResponse($result->toArray());
    }
}
