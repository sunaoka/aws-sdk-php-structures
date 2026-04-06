<?php

namespace Sunaoka\Aws\Structures\ElementalInference\GetFeed\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CroppingConfig|null $cropping
 * @property ClippingConfig|null $clipping
 */
class OutputConfig extends Shape
{
    /**
     * @param array{
     *     cropping?: CroppingConfig|null,
     *     clipping?: ClippingConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
