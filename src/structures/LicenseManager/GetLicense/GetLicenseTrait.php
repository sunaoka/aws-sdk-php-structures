<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetLicense;

trait GetLicenseTrait
{
    /**
     * @param GetLicenseRequest $args
     * @return GetLicenseResponse
     */
    public function getLicense(GetLicenseRequest $args)
    {
        $result = parent::getLicense($args->toArray());
        return new GetLicenseResponse($result->toArray());
    }
}
