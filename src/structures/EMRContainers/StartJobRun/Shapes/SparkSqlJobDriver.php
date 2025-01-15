<?php

namespace Sunaoka\Aws\Structures\EMRContainers\StartJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $entryPoint
 * @property string|null $sparkSqlParameters
 */
class SparkSqlJobDriver extends Shape
{
    /**
     * @param array{
     *     entryPoint?: string|null,
     *     sparkSqlParameters?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
