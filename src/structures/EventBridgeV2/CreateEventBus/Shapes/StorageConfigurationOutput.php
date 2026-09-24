<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\CreateEventBus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 365>|null $RetentionPeriodInDays
 * @property \Aws\Api\DateTimeResult|null $RetentionWindowStartTime
 */
class StorageConfigurationOutput extends Shape
{
    /**
     * @param array{
     *     RetentionPeriodInDays?: int<1, 365>|null,
     *     RetentionWindowStartTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
