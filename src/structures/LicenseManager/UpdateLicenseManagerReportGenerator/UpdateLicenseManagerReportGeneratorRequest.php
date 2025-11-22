<?php

namespace Sunaoka\Aws\Structures\LicenseManager\UpdateLicenseManagerReportGenerator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseManagerReportGeneratorArn
 * @property string $ReportGeneratorName
 * @property list<'LicenseConfigurationSummaryReport'|'LicenseConfigurationUsageReport'|'LicenseAssetGroupUsageReport'> $Type
 * @property Shapes\ReportContext $ReportContext
 * @property Shapes\ReportFrequency $ReportFrequency
 * @property string $ClientToken
 * @property string|null $Description
 */
class UpdateLicenseManagerReportGeneratorRequest extends Request
{
    /**
     * @param array{
     *     LicenseManagerReportGeneratorArn: string,
     *     ReportGeneratorName: string,
     *     Type: list<'LicenseConfigurationSummaryReport'|'LicenseConfigurationUsageReport'|'LicenseAssetGroupUsageReport'>,
     *     ReportContext: Shapes\ReportContext,
     *     ReportFrequency: Shapes\ReportFrequency,
     *     ClientToken: string,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
