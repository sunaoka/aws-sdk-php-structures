<?php

namespace Sunaoka\Aws\Structures\GameLift\StartMatchmaking\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S
 * @property double $N
 * @property list<string> $SL
 * @property array<string, double> $SDM
 */
class AttributeValue extends Shape
{
    /**
     * @param array{
     *     S?: string,
     *     N?: double,
     *     SL?: list<string>,
     *     SDM?: array<string, double>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
