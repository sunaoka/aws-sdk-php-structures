<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSolution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HPOObjective $hpoObjective
 * @property HPOResourceConfig $hpoResourceConfig
 * @property HyperParameterRanges $algorithmHyperParameterRanges
 */
class HPOConfig extends Shape
{
    /**
     * @param array{
     *     hpoObjective?: HPOObjective,
     *     hpoResourceConfig?: HPOResourceConfig,
     *     algorithmHyperParameterRanges?: HyperParameterRanges
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
