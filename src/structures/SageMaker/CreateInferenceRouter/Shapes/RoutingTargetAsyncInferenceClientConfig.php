<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceRouter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<60, 21600>|null $MaxTimeInBacklogSeconds
 */
class RoutingTargetAsyncInferenceClientConfig extends Shape
{
    /**
     * @param array{MaxTimeInBacklogSeconds?: int<60, 21600>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
