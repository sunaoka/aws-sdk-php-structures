<?php

namespace Sunaoka\Aws\Structures\EventBridge\DescribeConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string $Value
 * @property bool $IsValueSecret
 */
class ConnectionHeaderParameter extends Shape
{
    /**
     * @param array{
     *     Key?: string,
     *     Value?: string,
     *     IsValueSecret?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
