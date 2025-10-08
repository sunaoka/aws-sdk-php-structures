<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListAggregatorsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AggregatorV2Arn
 */
class AggregatorV2 extends Shape
{
    /**
     * @param array{AggregatorV2Arn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
