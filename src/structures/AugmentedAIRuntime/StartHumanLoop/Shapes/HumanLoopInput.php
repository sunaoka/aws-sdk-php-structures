<?php

namespace Sunaoka\Aws\Structures\AugmentedAIRuntime\StartHumanLoop\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InputContent
 */
class HumanLoopInput extends Shape
{
    /**
     * @param array{InputContent: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
