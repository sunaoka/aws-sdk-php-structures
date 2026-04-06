<?php

namespace Sunaoka\Aws\Structures\FreeTier\GetFreeTierUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Expression>|null $And
 * @property DimensionValues|null $Dimensions
 * @property Expression|null $Not
 * @property list<Expression>|null $Or
 */
class Expression extends Shape
{
    /**
     * @param array{
     *     And?: list<Expression>|null,
     *     Dimensions?: DimensionValues|null,
     *     Not?: Expression|null,
     *     Or?: list<Expression>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
