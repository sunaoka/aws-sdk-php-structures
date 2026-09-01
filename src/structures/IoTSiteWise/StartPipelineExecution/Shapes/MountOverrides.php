<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\StartPipelineExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, list<Mount>> $computeNodes
 */
class MountOverrides extends Shape
{
    /**
     * @param array{computeNodes: array<string, list<Mount>>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
