<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FAILED'|'TIMED_OUT'|'ALL' $failureType
 * @property int<0, 10> $numberOfRetries
 */
class RetryCriteria extends Shape
{
    /**
     * @param array{
     *     failureType: 'FAILED'|'TIMED_OUT'|'ALL',
     *     numberOfRetries: int<0, 10>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
