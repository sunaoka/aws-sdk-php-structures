<?php

namespace Sunaoka\Aws\Structures\Lambda\GetFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $Variables
 * @property EnvironmentError $Error
 */
class EnvironmentResponse extends Shape
{
    /**
     * @param array{
     *     Variables?: array<string, string>,
     *     Error?: EnvironmentError
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
