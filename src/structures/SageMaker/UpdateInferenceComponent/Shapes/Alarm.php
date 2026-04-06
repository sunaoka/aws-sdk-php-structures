<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateInferenceComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AlarmName
 */
class Alarm extends Shape
{
    /**
     * @param array{AlarmName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
