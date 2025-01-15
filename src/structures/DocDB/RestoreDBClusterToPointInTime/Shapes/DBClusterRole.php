<?php

namespace Sunaoka\Aws\Structures\DocDB\RestoreDBClusterToPointInTime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RoleArn
 * @property string|null $Status
 */
class DBClusterRole extends Shape
{
    /**
     * @param array{
     *     RoleArn?: string|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
