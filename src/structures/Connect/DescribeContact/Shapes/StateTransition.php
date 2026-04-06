<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INITIAL'|'CONNECTED'|'DISCONNECTED'|'MISSED'|null $State
 * @property \Aws\Api\DateTimeResult|null $StateStartTimestamp
 * @property \Aws\Api\DateTimeResult|null $StateEndTimestamp
 */
class StateTransition extends Shape
{
    /**
     * @param array{
     *     State?: 'INITIAL'|'CONNECTED'|'DISCONNECTED'|'MISSED'|null,
     *     StateStartTimestamp?: \Aws\Api\DateTimeResult|null,
     *     StateEndTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
