<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBParameterGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DBParameterGroupName
 * @property string $DBParameterGroupFamily
 * @property string $Description
 * @property string $DBParameterGroupArn
 */
class DBParameterGroup extends Shape
{
    /**
     * @param array{
     *     DBParameterGroupName?: string,
     *     DBParameterGroupFamily?: string,
     *     Description?: string,
     *     DBParameterGroupArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
