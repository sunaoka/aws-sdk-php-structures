<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetLicenseManagerReportGenerator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $value
 * @property 'DAY'|'WEEK'|'MONTH' $period
 */
class ReportFrequency extends Shape
{
    /**
     * @param array{
     *     value?: int,
     *     period?: 'DAY'|'WEEK'|'MONTH'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
