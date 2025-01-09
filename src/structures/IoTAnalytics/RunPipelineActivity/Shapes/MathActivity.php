<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\RunPipelineActivity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $attribute
 * @property string $math
 * @property string $next
 */
class MathActivity extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     attribute: string,
     *     math: string,
     *     next?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
