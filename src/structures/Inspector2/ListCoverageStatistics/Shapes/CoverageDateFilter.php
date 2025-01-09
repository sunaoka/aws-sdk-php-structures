<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $endInclusive
 * @property \Aws\Api\DateTimeResult $startInclusive
 */
class CoverageDateFilter extends Shape
{
    /**
     * @param array{
     *     endInclusive?: \Aws\Api\DateTimeResult,
     *     startInclusive?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
