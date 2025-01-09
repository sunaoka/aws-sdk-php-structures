<?php

namespace Sunaoka\Aws\Structures\Iot\ListCommandExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $after
 * @property string $before
 */
class TimeFilter extends Shape
{
    /**
     * @param array{
     *     after?: string,
     *     before?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
