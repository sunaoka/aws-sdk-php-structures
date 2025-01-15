<?php

namespace Sunaoka\Aws\Structures\WorkDocs\SearchResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $StartValue
 * @property \Aws\Api\DateTimeResult|null $EndValue
 */
class DateRangeType extends Shape
{
    /**
     * @param array{
     *     StartValue?: \Aws\Api\DateTimeResult|null,
     *     EndValue?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
