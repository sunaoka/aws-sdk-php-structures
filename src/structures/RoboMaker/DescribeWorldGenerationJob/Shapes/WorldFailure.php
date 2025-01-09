<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeWorldGenerationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'InternalServiceError'|'LimitExceeded'|'ResourceNotFound'|'RequestThrottled'|'InvalidInput'|'AllWorldGenerationFailed' $failureCode
 * @property string $sampleFailureReason
 * @property int $failureCount
 */
class WorldFailure extends Shape
{
    /**
     * @param array{
     *     failureCode?: 'InternalServiceError'|'LimitExceeded'|'ResourceNotFound'|'RequestThrottled'|'InvalidInput'|'AllWorldGenerationFailed',
     *     sampleFailureReason?: string,
     *     failureCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
