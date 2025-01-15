<?php

namespace Sunaoka\Aws\Structures\Athena\ListCapacityReservations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'SUCCEEDED'|'FAILED' $Status
 * @property string|null $StatusMessage
 * @property \Aws\Api\DateTimeResult $RequestTime
 * @property \Aws\Api\DateTimeResult|null $RequestCompletionTime
 */
class CapacityAllocation extends Shape
{
    /**
     * @param array{
     *     Status: 'PENDING'|'SUCCEEDED'|'FAILED',
     *     StatusMessage?: string|null,
     *     RequestTime: \Aws\Api\DateTimeResult,
     *     RequestCompletionTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
