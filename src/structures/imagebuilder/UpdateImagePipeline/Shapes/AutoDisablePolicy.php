<?php

namespace Sunaoka\Aws\Structures\imagebuilder\UpdateImagePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10> $failureCount
 */
class AutoDisablePolicy extends Shape
{
    /**
     * @param array{failureCount: int<1, 10>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
