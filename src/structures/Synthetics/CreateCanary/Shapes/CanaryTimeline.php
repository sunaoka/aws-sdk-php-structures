<?php

namespace Sunaoka\Aws\Structures\Synthetics\CreateCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $Created
 * @property \Aws\Api\DateTimeResult|null $LastModified
 * @property \Aws\Api\DateTimeResult|null $LastStarted
 * @property \Aws\Api\DateTimeResult|null $LastStopped
 */
class CanaryTimeline extends Shape
{
    /**
     * @param array{
     *     Created?: \Aws\Api\DateTimeResult|null,
     *     LastModified?: \Aws\Api\DateTimeResult|null,
     *     LastStarted?: \Aws\Api\DateTimeResult|null,
     *     LastStopped?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
