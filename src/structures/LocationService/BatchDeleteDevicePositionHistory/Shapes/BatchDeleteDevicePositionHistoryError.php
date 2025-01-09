<?php

namespace Sunaoka\Aws\Structures\LocationService\BatchDeleteDevicePositionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceId
 * @property BatchItemError $Error
 */
class BatchDeleteDevicePositionHistoryError extends Shape
{
    /**
     * @param array{
     *     DeviceId: string,
     *     Error: BatchItemError
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
