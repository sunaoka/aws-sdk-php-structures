<?php

namespace Sunaoka\Aws\Structures\EventBridge\DescribeEventBus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'FULL'|null $IncludeDetail
 * @property 'OFF'|'ERROR'|'INFO'|'TRACE'|null $Level
 */
class LogConfig extends Shape
{
    /**
     * @param array{
     *     IncludeDetail?: 'NONE'|'FULL'|null,
     *     Level?: 'OFF'|'ERROR'|'INFO'|'TRACE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
