<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|null $Code
 * @property string|null $Message
 */
class StepStateChangeReason extends Shape
{
    /**
     * @param array{
     *     Code?: 'NONE'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
