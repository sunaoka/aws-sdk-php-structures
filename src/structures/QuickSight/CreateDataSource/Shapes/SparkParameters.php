<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Host
 * @property int<1, 65535> $Port
 */
class SparkParameters extends Shape
{
    /**
     * @param array{
     *     Host: string,
     *     Port: int<1, 65535>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
