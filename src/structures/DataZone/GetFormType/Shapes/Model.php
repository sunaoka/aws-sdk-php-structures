<?php

namespace Sunaoka\Aws\Structures\DataZone\GetFormType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $smithy
 */
class Model extends Shape
{
    /**
     * @param array{smithy?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
