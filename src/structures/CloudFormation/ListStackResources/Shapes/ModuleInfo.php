<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TypeHierarchy
 * @property string $LogicalIdHierarchy
 */
class ModuleInfo extends Shape
{
    /**
     * @param array{
     *     TypeHierarchy?: string,
     *     LogicalIdHierarchy?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
