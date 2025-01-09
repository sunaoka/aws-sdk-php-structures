<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EventResourceARN
 */
class EventTriggerDefinition extends Shape
{
    /**
     * @param array{EventResourceARN?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
