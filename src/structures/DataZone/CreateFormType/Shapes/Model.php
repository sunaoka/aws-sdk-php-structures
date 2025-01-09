<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateFormType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $smithy
 */
class Model extends Shape
{
    /**
     * @param array{smithy?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
