<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateUserHierarchyStructure\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 */
class HierarchyLevelUpdate extends Shape
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
