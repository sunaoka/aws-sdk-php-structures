<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Host
 * @property int<1, 65535> $Port
 * @property string $Database
 * @property bool|null $UseServiceName
 */
class OracleParameters extends Shape
{
    /**
     * @param array{
     *     Host: string,
     *     Port: int<1, 65535>,
     *     Database: string,
     *     UseServiceName?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
