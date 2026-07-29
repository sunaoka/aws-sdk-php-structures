<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\StartSearch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TimeInNanos $startTime
 * @property TimeInNanos $endTime
 */
class TimeInterval extends Shape
{
    /**
     * @param array{
     *     startTime: TimeInNanos,
     *     endTime: TimeInNanos
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
