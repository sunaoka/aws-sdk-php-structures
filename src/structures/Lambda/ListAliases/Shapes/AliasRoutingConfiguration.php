<?php

namespace Sunaoka\Aws\Structures\Lambda\ListAliases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, double> $AdditionalVersionWeights
 */
class AliasRoutingConfiguration extends Shape
{
    /**
     * @param array{AdditionalVersionWeights?: array<string, double>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
