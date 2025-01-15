<?php

namespace Sunaoka\Aws\Structures\Support\DescribeCreateCaseOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $startTime
 * @property string|null $endTime
 */
class SupportedHour extends Shape
{
    /**
     * @param array{
     *     startTime?: string|null,
     *     endTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
