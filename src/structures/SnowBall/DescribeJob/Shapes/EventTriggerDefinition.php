<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EventResourceARN
 */
class EventTriggerDefinition extends Shape
{
    /**
     * @param array{EventResourceARN?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
