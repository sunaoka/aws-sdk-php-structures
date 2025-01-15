<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateFunctionCode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $Variables
 * @property EnvironmentError|null $Error
 */
class EnvironmentResponse extends Shape
{
    /**
     * @param array{
     *     Variables?: array<string, string>|null,
     *     Error?: EnvironmentError|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
