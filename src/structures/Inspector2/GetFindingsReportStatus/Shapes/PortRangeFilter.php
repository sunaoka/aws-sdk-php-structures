<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetFindingsReportStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $beginInclusive
 * @property int $endInclusive
 */
class PortRangeFilter extends Shape
{
    /**
     * @param array{
     *     beginInclusive?: int,
     *     endInclusive?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
