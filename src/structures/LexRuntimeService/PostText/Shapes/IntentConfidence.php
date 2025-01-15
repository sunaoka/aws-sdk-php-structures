<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\PostText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $score
 */
class IntentConfidence extends Shape
{
    /**
     * @param array{score?: double|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
