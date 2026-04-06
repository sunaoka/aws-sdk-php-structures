<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $MaxResultItemsToExpand
 * @property int|null $MaxExpandedResultsPerItem
 */
class ExpandConfiguration extends Shape
{
    /**
     * @param array{
     *     MaxResultItemsToExpand?: int|null,
     *     MaxExpandedResultsPerItem?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
