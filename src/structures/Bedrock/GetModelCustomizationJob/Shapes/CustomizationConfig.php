<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetModelCustomizationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DistillationConfig|null $distillationConfig
 * @property RFTConfig|null $rftConfig
 */
class CustomizationConfig extends Shape
{
    /**
     * @param array{
     *     distillationConfig?: DistillationConfig|null,
     *     rftConfig?: RFTConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
