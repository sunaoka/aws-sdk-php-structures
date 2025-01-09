<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $object
 */
class ServiceNowSourceProperties extends Shape
{
    /**
     * @param array{object: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
