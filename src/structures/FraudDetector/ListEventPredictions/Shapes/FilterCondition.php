<?php

namespace Sunaoka\Aws\Structures\FraudDetector\ListEventPredictions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $value
 */
class FilterCondition extends Shape
{
    /**
     * @param array{value?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
