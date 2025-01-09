<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetCustomModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DistillationConfig $distillationConfig
 */
class CustomizationConfig extends Shape
{
    /**
     * @param array{distillationConfig?: DistillationConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
