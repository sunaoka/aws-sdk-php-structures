<?php

namespace Sunaoka\Aws\Structures\Lambda\ListAliases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, double>|null $AdditionalVersionWeights
 */
class AliasRoutingConfiguration extends Shape
{
    /**
     * @param array{AdditionalVersionWeights?: array<string, double>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
