<?php

namespace Sunaoka\Aws\Structures\Shield\ListAttacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VectorType
 */
class AttackVectorDescription extends Shape
{
    /**
     * @param array{VectorType: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
