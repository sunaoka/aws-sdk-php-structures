<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBInstanceReadReplica\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RoleArn
 * @property string|null $FeatureName
 * @property string|null $Status
 */
class DBInstanceRole extends Shape
{
    /**
     * @param array{
     *     RoleArn?: string|null,
     *     FeatureName?: string|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
