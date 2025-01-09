<?php

namespace Sunaoka\Aws\Structures\DAX\UpdateParameterGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParameterGroupName
 * @property string $Description
 */
class ParameterGroup extends Shape
{
    /**
     * @param array{
     *     ParameterGroupName?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
