<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseManagerReportGenerators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $value
 * @property 'DAY'|'WEEK'|'MONTH'|null $period
 */
class ReportFrequency extends Shape
{
    /**
     * @param array{
     *     value?: int|null,
     *     period?: 'DAY'|'WEEK'|'MONTH'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
