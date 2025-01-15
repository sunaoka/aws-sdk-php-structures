<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSolutionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HPOObjective|null $hpoObjective
 * @property HPOResourceConfig|null $hpoResourceConfig
 * @property HyperParameterRanges|null $algorithmHyperParameterRanges
 */
class HPOConfig extends Shape
{
    /**
     * @param array{
     *     hpoObjective?: HPOObjective|null,
     *     hpoResourceConfig?: HPOResourceConfig|null,
     *     algorithmHyperParameterRanges?: HyperParameterRanges|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
