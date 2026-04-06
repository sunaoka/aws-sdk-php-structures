<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $attribute
 * @property string $math
 * @property string|null $next
 */
class MathActivity extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     attribute: string,
     *     math: string,
     *     next?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
