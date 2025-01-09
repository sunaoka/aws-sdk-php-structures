<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'core'|'cpu'|'data'|'fsize'|'locks'|'memlock'|'msgqueue'|'nice'|'nofile'|'nproc'|'rss'|'rtprio'|'rttime'|'sigpending'|'stack' $name
 * @property int $softLimit
 * @property int $hardLimit
 */
class Ulimit extends Shape
{
    /**
     * @param array{
     *     name: 'core'|'cpu'|'data'|'fsize'|'locks'|'memlock'|'msgqueue'|'nice'|'nofile'|'nproc'|'rss'|'rtprio'|'rttime'|'sigpending'|'stack',
     *     softLimit: int,
     *     hardLimit: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
