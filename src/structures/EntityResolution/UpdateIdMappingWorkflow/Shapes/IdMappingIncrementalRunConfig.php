<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateIdMappingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ON_DEMAND'|null $incrementalRunType
 */
class IdMappingIncrementalRunConfig extends Shape
{
    /**
     * @param array{incrementalRunType?: 'ON_DEMAND'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
