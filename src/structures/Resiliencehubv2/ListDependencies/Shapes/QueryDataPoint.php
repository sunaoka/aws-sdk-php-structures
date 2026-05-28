<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListDependencies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property int $queryCount
 */
class QueryDataPoint extends Shape
{
    /**
     * @param array{
     *     timestamp: \Aws\Api\DateTimeResult,
     *     queryCount: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
