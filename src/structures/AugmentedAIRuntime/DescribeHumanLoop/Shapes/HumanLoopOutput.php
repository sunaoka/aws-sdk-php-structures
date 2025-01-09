<?php

namespace Sunaoka\Aws\Structures\AugmentedAIRuntime\DescribeHumanLoop\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OutputS3Uri
 */
class HumanLoopOutput extends Shape
{
    /**
     * @param array{OutputS3Uri: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
