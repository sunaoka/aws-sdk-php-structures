<?php

namespace Sunaoka\Aws\Structures\Batch\RegisterJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $limits
 * @property array<string, string> $requests
 */
class EksContainerResourceRequirements extends Shape
{
    /**
     * @param array{
     *     limits?: array<string, string>,
     *     requests?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
