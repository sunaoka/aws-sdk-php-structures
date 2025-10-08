<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateLicense;

trait CreateLicenseTrait
{
    /**
     * @param CreateLicenseRequest $args
     * @return CreateLicenseResponse
     */
    public function createLicense(CreateLicenseRequest $args)
    {
        $result = parent::createLicense($args->toArray());
        return new CreateLicenseResponse($result->toArray());
    }
}
