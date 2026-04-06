<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\ListAutoshifts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $awayFrom
 * @property \Aws\Api\DateTimeResult $endTime
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'ACTIVE'|'COMPLETED' $status
 */
class AutoshiftSummary extends Shape
{
    /**
     * @param array{
     *     awayFrom: string,
     *     endTime: \Aws\Api\DateTimeResult,
     *     startTime: \Aws\Api\DateTimeResult,
     *     status: 'ACTIVE'|'COMPLETED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
