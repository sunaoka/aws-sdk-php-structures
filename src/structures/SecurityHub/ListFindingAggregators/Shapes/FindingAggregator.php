<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListFindingAggregators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FindingAggregatorArn
 */
class FindingAggregator extends Shape
{
    /**
     * @param array{FindingAggregatorArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
