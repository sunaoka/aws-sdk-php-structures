<?php

namespace Sunaoka\Aws\Structures\WorkDocs\SearchResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $StartValue
 * @property int $EndValue
 */
class LongRangeType extends Shape
{
    /**
     * @param array{
     *     StartValue?: int,
     *     EndValue?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
