<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UpdateLayer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ShutdownEventConfiguration|null $Shutdown
 */
class LifecycleEventConfiguration extends Shape
{
    /**
     * @param array{Shutdown?: ShutdownEventConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
