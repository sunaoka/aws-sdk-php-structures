<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 */
class InputContext extends Shape
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
