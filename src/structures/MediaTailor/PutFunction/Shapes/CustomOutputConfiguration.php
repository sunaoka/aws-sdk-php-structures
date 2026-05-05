<?php

namespace Sunaoka\Aws\Structures\MediaTailor\PutFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JSONATA' $Runtime
 * @property array<string, string>|null $Output
 */
class CustomOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     Runtime: 'JSONATA',
     *     Output?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
