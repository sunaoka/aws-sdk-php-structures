<?php

namespace Sunaoka\Aws\Structures\Detective\ListGraphs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreatedTime
 */
class Graph extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
