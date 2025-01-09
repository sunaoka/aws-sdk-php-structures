<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeClassificationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQ'|'GT'|'GTE'|'LT'|'LTE'|'NE'|'CONTAINS'|'STARTS_WITH' $comparator
 * @property list<TagCriterionPairForJob> $tagValues
 */
class TagCriterionForJob extends Shape
{
    /**
     * @param array{
     *     comparator?: 'EQ'|'GT'|'GTE'|'LT'|'LTE'|'NE'|'CONTAINS'|'STARTS_WITH',
     *     tagValues?: list<TagCriterionPairForJob>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
