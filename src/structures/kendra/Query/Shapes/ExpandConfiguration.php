<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxResultItemsToExpand
 * @property int $MaxExpandedResultsPerItem
 */
class ExpandConfiguration extends Shape
{
    /**
     * @param array{
     *     MaxResultItemsToExpand?: int,
     *     MaxExpandedResultsPerItem?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
