<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE' $Code
 * @property string $Message
 */
class StepStateChangeReason extends Shape
{
    /**
     * @param array{
     *     Code?: 'NONE',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
