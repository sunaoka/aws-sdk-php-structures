<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateLicenseVersion;

trait CreateLicenseVersionTrait
{
    /**
     * @param CreateLicenseVersionRequest $args
     * @return CreateLicenseVersionResponse
     */
    public function createLicenseVersion(CreateLicenseVersionRequest $args)
    {
        $result = parent::createLicenseVersion($args->toArray());
        return new CreateLicenseVersionResponse($result->toArray());
    }
}
