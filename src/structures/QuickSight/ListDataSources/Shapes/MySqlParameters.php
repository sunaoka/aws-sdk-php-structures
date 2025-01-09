<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Host
 * @property int<1, 65535> $Port
 * @property string $Database
 */
class MySqlParameters extends Shape
{
    /**
     * @param array{
     *     Host: string,
     *     Port: int<1, 65535>,
     *     Database: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
