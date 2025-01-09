<?php

namespace Sunaoka\Aws\Structures\Athena\ListCapacityReservations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'SUCCEEDED'|'FAILED' $Status
 * @property string $StatusMessage
 * @property \Aws\Api\DateTimeResult $RequestTime
 * @property \Aws\Api\DateTimeResult $RequestCompletionTime
 */
class CapacityAllocation extends Shape
{
    /**
     * @param array{
     *     Status: 'PENDING'|'SUCCEEDED'|'FAILED',
     *     StatusMessage?: string,
     *     RequestTime: \Aws\Api\DateTimeResult,
     *     RequestCompletionTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
