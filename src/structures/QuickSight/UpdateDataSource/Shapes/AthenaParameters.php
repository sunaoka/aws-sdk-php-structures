<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WorkGroup
 * @property string $RoleArn
 */
class AthenaParameters extends Shape
{
    /**
     * @param array{
     *     WorkGroup?: string,
     *     RoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
