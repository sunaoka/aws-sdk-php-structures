<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\GetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $score
 */
class ConfidenceScore extends Shape
{
    /**
     * @param array{score?: double} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
