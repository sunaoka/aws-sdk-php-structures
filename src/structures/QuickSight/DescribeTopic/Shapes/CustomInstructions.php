<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CustomInstructionsString
 */
class CustomInstructions extends Shape
{
    /**
     * @param array{CustomInstructionsString: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
