<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\RecognizeText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $score
 */
class ConfidenceScore extends Shape
{
    /**
     * @param array{score?: double|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
