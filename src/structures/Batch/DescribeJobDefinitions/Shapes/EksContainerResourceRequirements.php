<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $limits
 * @property array<string, string>|null $requests
 */
class EksContainerResourceRequirements extends Shape
{
    /**
     * @param array{
     *     limits?: array<string, string>|null,
     *     requests?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
