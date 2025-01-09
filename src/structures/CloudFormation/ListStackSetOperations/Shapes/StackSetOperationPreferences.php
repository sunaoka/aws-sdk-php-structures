<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackSetOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SEQUENTIAL'|'PARALLEL' $RegionConcurrencyType
 * @property list<string> $RegionOrder
 * @property int $FailureToleranceCount
 * @property int $FailureTolerancePercentage
 * @property int $MaxConcurrentCount
 * @property int $MaxConcurrentPercentage
 * @property 'STRICT_FAILURE_TOLERANCE'|'SOFT_FAILURE_TOLERANCE' $ConcurrencyMode
 */
class StackSetOperationPreferences extends Shape
{
    /**
     * @param array{
     *     RegionConcurrencyType?: 'SEQUENTIAL'|'PARALLEL',
     *     RegionOrder?: list<string>,
     *     FailureToleranceCount?: int,
     *     FailureTolerancePercentage?: int,
     *     MaxConcurrentCount?: int,
     *     MaxConcurrentPercentage?: int,
     *     ConcurrencyMode?: 'STRICT_FAILURE_TOLERANCE'|'SOFT_FAILURE_TOLERANCE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
