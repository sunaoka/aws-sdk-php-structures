<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\SearchInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $FromTime
 * @property \Aws\Api\DateTimeResult|null $ToTime
 */
class StartTimeRange extends Shape
{
    /**
     * @param array{
     *     FromTime?: \Aws\Api\DateTimeResult|null,
     *     ToTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
