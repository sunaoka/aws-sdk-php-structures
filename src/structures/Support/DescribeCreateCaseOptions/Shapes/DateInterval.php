<?php

namespace Sunaoka\Aws\Structures\Support\DescribeCreateCaseOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $startDateTime
 * @property string $endDateTime
 */
class DateInterval extends Shape
{
    /**
     * @param array{
     *     startDateTime?: string,
     *     endDateTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
