<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetMatchingWorkflow\Shapes;

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
