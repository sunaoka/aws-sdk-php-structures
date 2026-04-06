<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseManagerReportGenerators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReportGeneratorName
 * @property list<'LicenseConfigurationSummaryReport'|'LicenseConfigurationUsageReport'|'LicenseAssetGroupUsageReport'>|null $ReportType
 * @property ReportContext|null $ReportContext
 * @property ReportFrequency|null $ReportFrequency
 * @property string|null $LicenseManagerReportGeneratorArn
 * @property string|null $LastRunStatus
 * @property string|null $LastRunFailureReason
 * @property string|null $LastReportGenerationTime
 * @property string|null $ReportCreatorAccount
 * @property string|null $Description
 * @property S3Location|null $S3Location
 * @property string|null $CreateTime
 * @property list<Tag>|null $Tags
 */
class ReportGenerator extends Shape
{
    /**
     * @param array{
     *     ReportGeneratorName?: string|null,
     *     ReportType?: list<'LicenseConfigurationSummaryReport'|'LicenseConfigurationUsageReport'|'LicenseAssetGroupUsageReport'>|null,
     *     ReportContext?: ReportContext|null,
     *     ReportFrequency?: ReportFrequency|null,
     *     LicenseManagerReportGeneratorArn?: string|null,
     *     LastRunStatus?: string|null,
     *     LastRunFailureReason?: string|null,
     *     LastReportGenerationTime?: string|null,
     *     ReportCreatorAccount?: string|null,
     *     Description?: string|null,
     *     S3Location?: S3Location|null,
     *     CreateTime?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
