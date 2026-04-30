<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $minValue
 * @property double|null $maxValue
 */
class NumberValidation extends Shape
{
    /**
     * @param array{
     *     minValue?: double|null,
     *     maxValue?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
