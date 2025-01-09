<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Host
 * @property int $Port
 * @property string $Database
 */
class MySqlParameters extends Shape
{
    /**
     * @param array{
     *     Host: string,
     *     Port: int,
     *     Database: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
