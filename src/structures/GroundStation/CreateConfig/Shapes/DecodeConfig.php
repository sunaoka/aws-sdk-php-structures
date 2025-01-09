<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $unvalidatedJSON
 */
class DecodeConfig extends Shape
{
    /**
     * @param array{unvalidatedJSON: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
