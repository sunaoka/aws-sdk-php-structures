<?php

namespace Sunaoka\Aws\Structures\LicenseManager\DeleteLicense;

trait DeleteLicenseTrait
{
    /**
     * @param DeleteLicenseRequest $args
     * @return DeleteLicenseResponse
     */
    public function deleteLicense(DeleteLicenseRequest $args)
    {
        $result = parent::deleteLicense($args->toArray());
        return new DeleteLicenseResponse($result->toArray());
    }
}
