<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSolutionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $algorithmHyperParameters
 */
class TunedHPOParams extends Shape
{
    /**
     * @param array{algorithmHyperParameters?: array<string, string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
