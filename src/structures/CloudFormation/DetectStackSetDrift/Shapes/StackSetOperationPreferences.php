<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DetectStackSetDrift\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SEQUENTIAL'|'PARALLEL' $RegionConcurrencyType
 * @property list<string> $RegionOrder
 * @property int<0, max> $FailureToleranceCount
 * @property int<0, 100> $FailureTolerancePercentage
 * @property int<1, max> $MaxConcurrentCount
 * @property int<1, 100> $MaxConcurrentPercentage
 * @property 'STRICT_FAILURE_TOLERANCE'|'SOFT_FAILURE_TOLERANCE' $ConcurrencyMode
 */
class StackSetOperationPreferences extends Shape
{
    /**
     * @param array{
     *     RegionConcurrencyType?: 'SEQUENTIAL'|'PARALLEL',
     *     RegionOrder?: list<string>,
     *     FailureToleranceCount?: int<0, max>,
     *     FailureTolerancePercentage?: int<0, 100>,
     *     MaxConcurrentCount?: int<1, max>,
     *     MaxConcurrentPercentage?: int<1, 100>,
     *     ConcurrencyMode?: 'STRICT_FAILURE_TOLERANCE'|'SOFT_FAILURE_TOLERANCE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
