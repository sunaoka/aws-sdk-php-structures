<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeLayers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ShutdownEventConfiguration $Shutdown
 */
class LifecycleEventConfiguration extends Shape
{
    /**
     * @param array{Shutdown?: ShutdownEventConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
