<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DocumentAttribute $DocumentAttribute
 * @property list<ExpandedResultItem>|null $ExpandedResults
 */
class CollapsedResultDetail extends Shape
{
    /**
     * @param array{
     *     DocumentAttribute: DocumentAttribute,
     *     ExpandedResults?: list<ExpandedResultItem>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
