<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $startInclusive
 * @property \Aws\Api\DateTimeResult|null $endInclusive
 */
class DateFilter extends Shape
{
    /**
     * @param array{
     *     startInclusive?: \Aws\Api\DateTimeResult|null,
     *     endInclusive?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
