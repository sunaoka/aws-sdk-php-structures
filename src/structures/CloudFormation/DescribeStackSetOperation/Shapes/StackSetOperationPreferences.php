<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackSetOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SEQUENTIAL'|'PARALLEL'|null $RegionConcurrencyType
 * @property list<string>|null $RegionOrder
 * @property int<0, max>|null $FailureToleranceCount
 * @property int<0, 100>|null $FailureTolerancePercentage
 * @property int<1, max>|null $MaxConcurrentCount
 * @property int<1, 100>|null $MaxConcurrentPercentage
 * @property 'STRICT_FAILURE_TOLERANCE'|'SOFT_FAILURE_TOLERANCE'|null $ConcurrencyMode
 */
class StackSetOperationPreferences extends Shape
{
    /**
     * @param array{
     *     RegionConcurrencyType?: 'SEQUENTIAL'|'PARALLEL'|null,
     *     RegionOrder?: list<string>|null,
     *     FailureToleranceCount?: int<0, max>|null,
     *     FailureTolerancePercentage?: int<0, 100>|null,
     *     MaxConcurrentCount?: int<1, max>|null,
     *     MaxConcurrentPercentage?: int<1, 100>|null,
     *     ConcurrencyMode?: 'STRICT_FAILURE_TOLERANCE'|'SOFT_FAILURE_TOLERANCE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
