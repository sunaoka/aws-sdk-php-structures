<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GREATER_IS_BETTER'|'LESSER_IS_BETTER'|'SPECIFIED' $UseOrdering
 * @property list<string> $SpecifedOrder
 * @property 'LEAST'|'MOST' $TreatUndefinedSpecifiedValues
 */
class ComparativeOrder extends Shape
{
    /**
     * @param array{
     *     UseOrdering?: 'GREATER_IS_BETTER'|'LESSER_IS_BETTER'|'SPECIFIED',
     *     SpecifedOrder?: list<string>,
     *     TreatUndefinedSpecifiedValues?: 'LEAST'|'MOST'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
