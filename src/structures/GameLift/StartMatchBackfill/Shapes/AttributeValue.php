<?php

namespace Sunaoka\Aws\Structures\GameLift\StartMatchBackfill\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S
 * @property double|null $N
 * @property list<string>|null $SL
 * @property array<string, double>|null $SDM
 */
class AttributeValue extends Shape
{
    /**
     * @param array{
     *     S?: string|null,
     *     N?: double|null,
     *     SL?: list<string>|null,
     *     SDM?: array<string, double>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
