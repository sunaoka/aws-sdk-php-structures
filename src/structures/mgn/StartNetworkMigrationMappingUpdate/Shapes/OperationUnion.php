<?php

namespace Sunaoka\Aws\Structures\mgn\StartNetworkMigrationMappingUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateOperation|null $update
 */
class OperationUnion extends Shape
{
    /**
     * @param array{update?: UpdateOperation|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
