<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DetectStackResourceDrift\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TypeHierarchy
 * @property string|null $LogicalIdHierarchy
 */
class ModuleInfo extends Shape
{
    /**
     * @param array{
     *     TypeHierarchy?: string|null,
     *     LogicalIdHierarchy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
