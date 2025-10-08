<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetLicenseManagerReportGenerator;

trait GetLicenseManagerReportGeneratorTrait
{
    /**
     * @param GetLicenseManagerReportGeneratorRequest $args
     * @return GetLicenseManagerReportGeneratorResponse
     */
    public function getLicenseManagerReportGenerator(GetLicenseManagerReportGeneratorRequest $args)
    {
        $result = parent::getLicenseManagerReportGenerator($args->toArray());
        return new GetLicenseManagerReportGeneratorResponse($result->toArray());
    }
}
