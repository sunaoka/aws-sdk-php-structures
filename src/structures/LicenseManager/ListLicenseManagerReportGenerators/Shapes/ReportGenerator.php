<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseManagerReportGenerators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReportGeneratorName
 * @property list<'LicenseConfigurationSummaryReport'|'LicenseConfigurationUsageReport'> $ReportType
 * @property ReportContext $ReportContext
 * @property ReportFrequency $ReportFrequency
 * @property string $LicenseManagerReportGeneratorArn
 * @property string $LastRunStatus
 * @property string $LastRunFailureReason
 * @property string $LastReportGenerationTime
 * @property string $ReportCreatorAccount
 * @property string $Description
 * @property S3Location $S3Location
 * @property string $CreateTime
 * @property list<Tag> $Tags
 */
class ReportGenerator extends Shape
{
    /**
     * @param array{
     *     ReportGeneratorName?: string,
     *     ReportType?: list<'LicenseConfigurationSummaryReport'|'LicenseConfigurationUsageReport'>,
     *     ReportContext?: ReportContext,
     *     ReportFrequency?: ReportFrequency,
     *     LicenseManagerReportGeneratorArn?: string,
     *     LastRunStatus?: string,
     *     LastRunFailureReason?: string,
     *     LastReportGenerationTime?: string,
     *     ReportCreatorAccount?: string,
     *     Description?: string,
     *     S3Location?: S3Location,
     *     CreateTime?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
