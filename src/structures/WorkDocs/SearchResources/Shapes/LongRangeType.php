<?php

namespace Sunaoka\Aws\Structures\WorkDocs\SearchResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $StartValue
 * @property int|null $EndValue
 */
class LongRangeType extends Shape
{
    /**
     * @param array{
     *     StartValue?: int|null,
     *     EndValue?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
