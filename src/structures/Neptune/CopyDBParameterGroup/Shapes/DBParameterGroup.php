<?php

namespace Sunaoka\Aws\Structures\Neptune\CopyDBParameterGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DBParameterGroupName
 * @property string|null $DBParameterGroupFamily
 * @property string|null $Description
 * @property string|null $DBParameterGroupArn
 */
class DBParameterGroup extends Shape
{
    /**
     * @param array{
     *     DBParameterGroupName?: string|null,
     *     DBParameterGroupFamily?: string|null,
     *     Description?: string|null,
     *     DBParameterGroupArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
