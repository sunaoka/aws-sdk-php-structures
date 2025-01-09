<?php

namespace Sunaoka\Aws\Structures\Rds\RestoreDBClusterFromS3\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DBClusterOptionGroupName
 * @property string $Status
 */
class DBClusterOptionGroupStatus extends Shape
{
    /**
     * @param array{
     *     DBClusterOptionGroupName?: string,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
