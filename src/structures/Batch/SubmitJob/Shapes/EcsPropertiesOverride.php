<?php

namespace Sunaoka\Aws\Structures\Batch\SubmitJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TaskPropertiesOverride> $taskProperties
 */
class EcsPropertiesOverride extends Shape
{
    /**
     * @param array{taskProperties?: list<TaskPropertiesOverride>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
