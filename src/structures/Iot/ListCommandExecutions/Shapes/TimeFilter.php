<?php

namespace Sunaoka\Aws\Structures\Iot\ListCommandExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $after
 * @property string|null $before
 */
class TimeFilter extends Shape
{
    /**
     * @param array{
     *     after?: string|null,
     *     before?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
