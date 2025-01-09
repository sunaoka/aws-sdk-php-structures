<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\PostText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $score
 */
class IntentConfidence extends Shape
{
    /**
     * @param array{score?: double} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
