<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateModelCustomizationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DistillationConfig|null $distillationConfig
 */
class CustomizationConfig extends Shape
{
    /**
     * @param array{distillationConfig?: DistillationConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
