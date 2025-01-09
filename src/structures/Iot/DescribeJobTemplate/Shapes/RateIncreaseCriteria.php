<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $numberOfNotifiedThings
 * @property int $numberOfSucceededThings
 */
class RateIncreaseCriteria extends Shape
{
    /**
     * @param array{
     *     numberOfNotifiedThings?: int,
     *     numberOfSucceededThings?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
