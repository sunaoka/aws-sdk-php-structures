<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetLicenseManagerReportGenerator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $value
 * @property 'DAY'|'WEEK'|'MONTH'|'ONE_TIME'|null $period
 */
class ReportFrequency extends Shape
{
    /**
     * @param array{
     *     value?: int|null,
     *     period?: 'DAY'|'WEEK'|'MONTH'|'ONE_TIME'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
