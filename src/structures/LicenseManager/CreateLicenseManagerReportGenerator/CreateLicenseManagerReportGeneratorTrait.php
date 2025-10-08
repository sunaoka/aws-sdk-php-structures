<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateLicenseManagerReportGenerator;

trait CreateLicenseManagerReportGeneratorTrait
{
    /**
     * @param CreateLicenseManagerReportGeneratorRequest $args
     * @return CreateLicenseManagerReportGeneratorResponse
     */
    public function createLicenseManagerReportGenerator(CreateLicenseManagerReportGeneratorRequest $args)
    {
        $result = parent::createLicenseManagerReportGenerator($args->toArray());
        return new CreateLicenseManagerReportGeneratorResponse($result->toArray());
    }
}
