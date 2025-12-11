<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListLogGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $type
 */
class DataSourceFilter extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
