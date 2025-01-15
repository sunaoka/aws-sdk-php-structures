<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GREATER_IS_BETTER'|'LESSER_IS_BETTER'|'SPECIFIED'|null $UseOrdering
 * @property list<string>|null $SpecifedOrder
 * @property 'LEAST'|'MOST'|null $TreatUndefinedSpecifiedValues
 */
class ComparativeOrder extends Shape
{
    /**
     * @param array{
     *     UseOrdering?: 'GREATER_IS_BETTER'|'LESSER_IS_BETTER'|'SPECIFIED'|null,
     *     SpecifedOrder?: list<string>|null,
     *     TreatUndefinedSpecifiedValues?: 'LEAST'|'MOST'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
