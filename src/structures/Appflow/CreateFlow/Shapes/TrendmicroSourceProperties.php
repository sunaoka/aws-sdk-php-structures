<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $object
 */
class TrendmicroSourceProperties extends Shape
{
    /**
     * @param array{object: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
