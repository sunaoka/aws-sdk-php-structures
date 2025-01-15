<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\GetMetricsSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $findingNumber
 * @property string|null $scanName
 */
class ScanNameWithFindingNum extends Shape
{
    /**
     * @param array{
     *     findingNumber?: int|null,
     *     scanName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
