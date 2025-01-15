<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Timezone
 */
class LabelOptions extends Shape
{
    /**
     * @param array{Timezone?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
