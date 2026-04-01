<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\RegisterService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'webhook'|null $type
 */
class EventChannelDetails extends Shape
{
    /**
     * @param array{type?: 'webhook'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
