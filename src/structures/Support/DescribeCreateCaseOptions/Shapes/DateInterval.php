<?php

namespace Sunaoka\Aws\Structures\Support\DescribeCreateCaseOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $startDateTime
 * @property string|null $endDateTime
 */
class DateInterval extends Shape
{
    /**
     * @param array{
     *     startDateTime?: string|null,
     *     endDateTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
