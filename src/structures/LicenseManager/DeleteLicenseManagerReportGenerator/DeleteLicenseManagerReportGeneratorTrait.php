<?php

namespace Sunaoka\Aws\Structures\LicenseManager\DeleteLicenseManagerReportGenerator;

trait DeleteLicenseManagerReportGeneratorTrait
{
    /**
     * @param DeleteLicenseManagerReportGeneratorRequest $args
     * @return DeleteLicenseManagerReportGeneratorResponse
     */
    public function deleteLicenseManagerReportGenerator(DeleteLicenseManagerReportGeneratorRequest $args)
    {
        $result = parent::deleteLicenseManagerReportGenerator($args->toArray());
        return new DeleteLicenseManagerReportGeneratorResponse($result->toArray());
    }
}
