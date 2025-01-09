<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateMatchingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $hashed
 * @property string $name
 */
class OutputAttribute extends Shape
{
    /**
     * @param array{
     *     hashed?: bool,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
