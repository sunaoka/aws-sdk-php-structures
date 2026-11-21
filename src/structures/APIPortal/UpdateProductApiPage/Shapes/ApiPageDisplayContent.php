<?php

namespace Sunaoka\Aws\Structures\APIPortal\UpdateProductApiPage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property None|null $none
 * @property DisplayContentOverrides|null $overrides
 */
class ApiPageDisplayContent extends Shape
{
    /**
     * @param array{
     *     none?: None|null,
     *     overrides?: DisplayContentOverrides|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
