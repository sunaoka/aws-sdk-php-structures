<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entryPoint
 * @property string $sparkSqlParameters
 */
class SparkSqlJobDriver extends Shape
{
    /**
     * @param array{
     *     entryPoint?: string,
     *     sparkSqlParameters?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
