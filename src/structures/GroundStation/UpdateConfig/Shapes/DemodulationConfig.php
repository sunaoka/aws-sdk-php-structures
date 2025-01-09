<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $unvalidatedJSON
 */
class DemodulationConfig extends Shape
{
    /**
     * @param array{unvalidatedJSON: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
