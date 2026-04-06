<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property File $type
 */
class CompareActionSummary extends Shape
{
    /**
     * @param array{type: File} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
