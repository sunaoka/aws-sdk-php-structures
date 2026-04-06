<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateLicenseManagerReportGenerator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReportGeneratorName
 * @property list<'LicenseConfigurationSummaryReport'|'LicenseConfigurationUsageReport'> $Type
 * @property Shapes\ReportContext $ReportContext
 * @property Shapes\ReportFrequency $ReportFrequency
 * @property string $ClientToken
 * @property string|null $Description
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateLicenseManagerReportGeneratorRequest extends Request
{
    /**
     * @param array{
     *     ReportGeneratorName: string,
     *     Type: list<'LicenseConfigurationSummaryReport'|'LicenseConfigurationUsageReport'>,
     *     ReportContext: Shapes\ReportContext,
     *     ReportFrequency: Shapes\ReportFrequency,
     *     ClientToken: string,
     *     Description?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
