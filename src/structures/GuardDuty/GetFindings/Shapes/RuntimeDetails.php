<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProcessDetails $Process
 * @property RuntimeContext $Context
 */
class RuntimeDetails extends Shape
{
    /**
     * @param array{
     *     Process?: ProcessDetails,
     *     Context?: RuntimeContext
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
