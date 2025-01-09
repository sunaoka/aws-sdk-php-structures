<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Timezone
 */
class LabelOptions extends Shape
{
    /**
     * @param array{Timezone?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
