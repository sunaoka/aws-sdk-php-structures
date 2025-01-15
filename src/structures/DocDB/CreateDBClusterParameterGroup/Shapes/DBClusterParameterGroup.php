<?php

namespace Sunaoka\Aws\Structures\DocDB\CreateDBClusterParameterGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DBClusterParameterGroupName
 * @property string|null $DBParameterGroupFamily
 * @property string|null $Description
 * @property string|null $DBClusterParameterGroupArn
 */
class DBClusterParameterGroup extends Shape
{
    /**
     * @param array{
     *     DBClusterParameterGroupName?: string|null,
     *     DBParameterGroupFamily?: string|null,
     *     Description?: string|null,
     *     DBClusterParameterGroupArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
