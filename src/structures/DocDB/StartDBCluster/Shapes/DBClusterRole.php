<?php

namespace Sunaoka\Aws\Structures\DocDB\StartDBCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleArn
 * @property string $Status
 */
class DBClusterRole extends Shape
{
    /**
     * @param array{
     *     RoleArn?: string,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
