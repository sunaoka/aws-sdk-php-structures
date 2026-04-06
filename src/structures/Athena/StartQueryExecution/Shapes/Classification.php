<?php

namespace Sunaoka\Aws\Structures\Athena\StartQueryExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property array<string, string>|null $Properties
 */
class Classification extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Properties?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
