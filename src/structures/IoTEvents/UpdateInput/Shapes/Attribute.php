<?php

namespace Sunaoka\Aws\Structures\IoTEvents\UpdateInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jsonPath
 */
class Attribute extends Shape
{
    /**
     * @param array{jsonPath: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
