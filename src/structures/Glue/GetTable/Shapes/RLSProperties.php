<?php

namespace Sunaoka\Aws\Structures\Glue\GetTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DefaultRLSPolicy
 */
class RLSProperties extends Shape
{
    /**
     * @param array{DefaultRLSPolicy?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
