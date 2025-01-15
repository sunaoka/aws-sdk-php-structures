<?php

namespace Sunaoka\Aws\Structures\DAX\CreateParameterGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ParameterGroupName
 * @property string|null $Description
 */
class ParameterGroup extends Shape
{
    /**
     * @param array{
     *     ParameterGroupName?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
