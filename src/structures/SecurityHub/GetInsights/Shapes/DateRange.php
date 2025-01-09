<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Value
 * @property 'DAYS' $Unit
 */
class DateRange extends Shape
{
    /**
     * @param array{
     *     Value?: int,
     *     Unit?: 'DAYS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
