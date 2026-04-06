<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\GetManagedResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'APPLIED'|'NOT_APPLIED' $appliedStatus
 * @property string $awayFrom
 * @property \Aws\Api\DateTimeResult $startTime
 */
class AutoshiftInResource extends Shape
{
    /**
     * @param array{
     *     appliedStatus: 'APPLIED'|'NOT_APPLIED',
     *     awayFrom: string,
     *     startTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
