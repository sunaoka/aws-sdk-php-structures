<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $permission
 */
class ResourcePermission extends Shape
{
    /**
     * @param array{permission?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
