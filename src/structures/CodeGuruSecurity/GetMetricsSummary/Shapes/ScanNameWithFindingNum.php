<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\GetMetricsSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $findingNumber
 * @property string $scanName
 */
class ScanNameWithFindingNum extends Shape
{
    /**
     * @param array{
     *     findingNumber?: int,
     *     scanName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
