<?php

namespace Sunaoka\Aws\Structures\Batch\SubmitJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TaskPropertiesOverride>|null $taskProperties
 */
class EcsPropertiesOverride extends Shape
{
    /**
     * @param array{taskProperties?: list<TaskPropertiesOverride>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
