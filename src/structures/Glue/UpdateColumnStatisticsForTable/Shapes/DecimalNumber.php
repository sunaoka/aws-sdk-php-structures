<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateColumnStatisticsForTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UnscaledValue
 * @property int $Scale
 */
class DecimalNumber extends Shape
{
    /**
     * @param array{
     *     UnscaledValue: string,
     *     Scale: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
