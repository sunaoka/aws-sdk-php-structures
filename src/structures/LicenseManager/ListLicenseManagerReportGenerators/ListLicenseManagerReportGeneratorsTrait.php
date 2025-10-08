<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseManagerReportGenerators;

trait ListLicenseManagerReportGeneratorsTrait
{
    /**
     * @param ListLicenseManagerReportGeneratorsRequest $args
     * @return ListLicenseManagerReportGeneratorsResponse
     */
    public function listLicenseManagerReportGenerators(ListLicenseManagerReportGeneratorsRequest $args)
    {
        $result = parent::listLicenseManagerReportGenerators($args->toArray());
        return new ListLicenseManagerReportGeneratorsResponse($result->toArray());
    }
}
