<?php

namespace Sunaoka\Aws\Structures\WorkDocs\SearchResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $StartValue
 * @property \Aws\Api\DateTimeResult $EndValue
 */
class DateRangeType extends Shape
{
    /**
     * @param array{
     *     StartValue?: \Aws\Api\DateTimeResult,
     *     EndValue?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
