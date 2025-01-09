<?php

namespace Sunaoka\Aws\Structures\IVS\GetStreamSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $code
 * @property \Aws\Api\DateTimeResult $eventTime
 * @property string $name
 * @property string $type
 */
class StreamEvent extends Shape
{
    /**
     * @param array{
     *     code?: string,
     *     eventTime?: \Aws\Api\DateTimeResult,
     *     name?: string,
     *     type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
