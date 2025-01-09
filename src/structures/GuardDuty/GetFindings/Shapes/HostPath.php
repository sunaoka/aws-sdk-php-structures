<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Path
 */
class HostPath extends Shape
{
    /**
     * @param array{Path?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
