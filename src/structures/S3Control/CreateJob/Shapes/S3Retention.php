<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $RetainUntilDate
 * @property 'COMPLIANCE'|'GOVERNANCE'|null $Mode
 * @property 'ON'|'OFF'|null $EventHold
 * @property S3ObjectLockRetentionEventHoldDuration|null $EventHoldDuration
 */
class S3Retention extends Shape
{
    /**
     * @param array{
     *     RetainUntilDate?: \Aws\Api\DateTimeResult|null,
     *     Mode?: 'COMPLIANCE'|'GOVERNANCE'|null,
     *     EventHold?: 'ON'|'OFF'|null,
     *     EventHoldDuration?: S3ObjectLockRetentionEventHoldDuration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
