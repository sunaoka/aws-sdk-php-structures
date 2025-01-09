<?php

namespace Sunaoka\Aws\Structures\FreeTier\GetFreeTierUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Expression> $And
 * @property DimensionValues $Dimensions
 * @property Expression $Not
 * @property list<Expression> $Or
 */
class Expression extends Shape
{
    /**
     * @param array{
     *     And?: list<Expression>,
     *     Dimensions?: DimensionValues,
     *     Not?: Expression,
     *     Or?: list<Expression>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
