<?php

namespace Sunaoka\Aws\Structures\Route53\GetHealthCheckStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Status
 * @property \Aws\Api\DateTimeResult|null $CheckedTime
 */
class StatusReport extends Shape
{
    /**
     * @param array{
     *     Status?: string|null,
     *     CheckedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
