<?php

namespace Sunaoka\Aws\Structures\IVS\GetStreamSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $type
 * @property \Aws\Api\DateTimeResult|null $eventTime
 * @property string|null $code
 */
class StreamEvent extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     type?: string|null,
     *     eventTime?: \Aws\Api\DateTimeResult|null,
     *     code?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
