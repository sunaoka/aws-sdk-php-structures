<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TargetArn
 */
class DeadLetterConfig extends Shape
{
    /**
     * @param array{TargetArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
