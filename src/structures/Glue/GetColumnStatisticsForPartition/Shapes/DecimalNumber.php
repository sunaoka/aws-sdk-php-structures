<?php

namespace Sunaoka\Aws\Structures\Glue\GetColumnStatisticsForPartition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Psr\Http\Message\StreamInterface $UnscaledValue
 * @property int $Scale
 */
class DecimalNumber extends Shape
{
    /**
     * @param array{
     *     UnscaledValue: \Psr\Http\Message\StreamInterface,
     *     Scale: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
