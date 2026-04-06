<?php

namespace Sunaoka\Aws\Structures\IVS\GetStreamSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $code
 * @property \Aws\Api\DateTimeResult|null $eventTime
 * @property string|null $name
 * @property string|null $type
 */
class StreamEvent extends Shape
{
    /**
     * @param array{
     *     code?: string|null,
     *     eventTime?: \Aws\Api\DateTimeResult|null,
     *     name?: string|null,
     *     type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
