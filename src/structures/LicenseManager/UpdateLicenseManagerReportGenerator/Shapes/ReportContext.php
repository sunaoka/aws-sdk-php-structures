<?php

namespace Sunaoka\Aws\Structures\LicenseManager\UpdateLicenseManagerReportGenerator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $licenseConfigurationArns
 * @property list<string>|null $licenseAssetGroupArns
 * @property \Aws\Api\DateTimeResult|null $reportStartDate
 * @property \Aws\Api\DateTimeResult|null $reportEndDate
 */
class ReportContext extends Shape
{
    /**
     * @param array{
     *     licenseConfigurationArns?: list<string>|null,
     *     licenseAssetGroupArns?: list<string>|null,
     *     reportStartDate?: \Aws\Api\DateTimeResult|null,
     *     reportEndDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
