<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProcessDetails|null $Process
 * @property RuntimeContext|null $Context
 */
class RuntimeDetails extends Shape
{
    /**
     * @param array{
     *     Process?: ProcessDetails|null,
     *     Context?: RuntimeContext|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
