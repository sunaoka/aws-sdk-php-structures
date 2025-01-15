<?php

namespace Sunaoka\Aws\Structures\Neptune\CreateDBCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DBClusterOptionGroupName
 * @property string|null $Status
 */
class DBClusterOptionGroupStatus extends Shape
{
    /**
     * @param array{
     *     DBClusterOptionGroupName?: string|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
