<?php

namespace Sunaoka\Aws\Structures\DataZone\GetNotebookRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $instanceType
 * @property string|null $environmentVersion
 */
class ComputeConfig extends Shape
{
    /**
     * @param array{
     *     instanceType?: string|null,
     *     environmentVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
