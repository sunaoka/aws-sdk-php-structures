<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeWorldGenerationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'InternalServiceError'|'LimitExceeded'|'ResourceNotFound'|'RequestThrottled'|'InvalidInput'|'AllWorldGenerationFailed'|null $failureCode
 * @property string|null $sampleFailureReason
 * @property int|null $failureCount
 */
class WorldFailure extends Shape
{
    /**
     * @param array{
     *     failureCode?: 'InternalServiceError'|'LimitExceeded'|'ResourceNotFound'|'RequestThrottled'|'InvalidInput'|'AllWorldGenerationFailed'|null,
     *     sampleFailureReason?: string|null,
     *     failureCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
