<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TimeInNanos $sessionStartTimestamp
 * @property TimeInNanos $sessionEndTimestamp
 */
class SessionConfig extends Shape
{
    /**
     * @param array{
     *     sessionStartTimestamp: TimeInNanos,
     *     sessionEndTimestamp: TimeInNanos
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
