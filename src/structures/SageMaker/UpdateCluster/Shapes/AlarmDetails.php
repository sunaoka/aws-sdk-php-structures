<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AlarmName
 */
class AlarmDetails extends Shape
{
    /**
     * @param array{AlarmName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
