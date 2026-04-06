<?php

namespace Sunaoka\Aws\Structures\Athena\GetCapacityReservation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'PENDING'|'ACTIVE'|'CANCELLING'|'CANCELLED'|'FAILED'|'UPDATE_PENDING' $Status
 * @property int<24, max> $TargetDpus
 * @property int<0, max> $AllocatedDpus
 * @property CapacityAllocation|null $LastAllocation
 * @property \Aws\Api\DateTimeResult|null $LastSuccessfulAllocationTime
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class CapacityReservation extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Status: 'PENDING'|'ACTIVE'|'CANCELLING'|'CANCELLED'|'FAILED'|'UPDATE_PENDING',
     *     TargetDpus: int<24, max>,
     *     AllocatedDpus: int<0, max>,
     *     LastAllocation?: CapacityAllocation|null,
     *     LastSuccessfulAllocationTime?: \Aws\Api\DateTimeResult|null,
     *     CreationTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
