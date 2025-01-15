<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\ListDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $start
 * @property \Aws\Api\DateTimeResult|null $end
 */
class TimeRange extends Shape
{
    /**
     * @param array{
     *     start?: \Aws\Api\DateTimeResult|null,
     *     end?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
