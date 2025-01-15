<?php

namespace Sunaoka\Aws\Structures\Detective\ListGraphs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 */
class Graph extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
