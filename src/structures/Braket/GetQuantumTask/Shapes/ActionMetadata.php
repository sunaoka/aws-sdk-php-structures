<?php

namespace Sunaoka\Aws\Structures\Braket\GetQuantumTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionType
 * @property int|null $programCount
 * @property int|null $executableCount
 */
class ActionMetadata extends Shape
{
    /**
     * @param array{
     *     actionType: string,
     *     programCount?: int|null,
     *     executableCount?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
