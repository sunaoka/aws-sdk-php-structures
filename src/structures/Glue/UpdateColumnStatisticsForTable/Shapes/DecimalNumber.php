<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateColumnStatisticsForTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $UnscaledValue
 * @property int $Scale
 */
class DecimalNumber extends Shape
{
    /**
     * @param array{
     *     UnscaledValue: string|resource|\Psr\Http\Message\StreamInterface,
     *     Scale: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
