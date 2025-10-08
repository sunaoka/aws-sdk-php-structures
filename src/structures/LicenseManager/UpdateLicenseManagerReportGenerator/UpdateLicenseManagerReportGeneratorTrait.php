<?php

namespace Sunaoka\Aws\Structures\LicenseManager\UpdateLicenseManagerReportGenerator;

trait UpdateLicenseManagerReportGeneratorTrait
{
    /**
     * @param UpdateLicenseManagerReportGeneratorRequest $args
     * @return UpdateLicenseManagerReportGeneratorResponse
     */
    public function updateLicenseManagerReportGenerator(UpdateLicenseManagerReportGeneratorRequest $args)
    {
        $result = parent::updateLicenseManagerReportGenerator($args->toArray());
        return new UpdateLicenseManagerReportGeneratorResponse($result->toArray());
    }
}
