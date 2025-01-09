<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property string $Database
 */
class RdsParameters extends Shape
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Database: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
