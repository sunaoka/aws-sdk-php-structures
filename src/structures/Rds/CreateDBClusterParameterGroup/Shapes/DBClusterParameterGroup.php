<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBClusterParameterGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DBClusterParameterGroupName
 * @property string $DBParameterGroupFamily
 * @property string $Description
 * @property string $DBClusterParameterGroupArn
 */
class DBClusterParameterGroup extends Shape
{
    /**
     * @param array{
     *     DBClusterParameterGroupName?: string,
     *     DBParameterGroupFamily?: string,
     *     Description?: string,
     *     DBClusterParameterGroupArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
