<?php

namespace Sunaoka\Aws\Structures\Route53\GetHealthCheckLastFailureReason\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Status
 * @property \Aws\Api\DateTimeResult $CheckedTime
 */
class StatusReport extends Shape
{
    /**
     * @param array{
     *     Status?: string,
     *     CheckedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
