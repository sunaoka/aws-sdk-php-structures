<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelPackageGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Restricted'|null $ManagedStorageType
 */
class ManagedConfiguration extends Shape
{
    /**
     * @param array{ManagedStorageType?: 'Restricted'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
