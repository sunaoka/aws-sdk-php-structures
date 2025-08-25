<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\GetMetricsSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $scanName
 * @property int|null $findingNumber
 */
class ScanNameWithFindingNum extends Shape
{
    /**
     * @param array{
     *     scanName?: string|null,
     *     findingNumber?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
