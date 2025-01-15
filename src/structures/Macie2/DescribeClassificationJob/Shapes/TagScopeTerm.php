<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeClassificationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQ'|'GT'|'GTE'|'LT'|'LTE'|'NE'|'CONTAINS'|'STARTS_WITH'|null $comparator
 * @property string|null $key
 * @property list<TagValuePair>|null $tagValues
 * @property 'S3_OBJECT'|null $target
 */
class TagScopeTerm extends Shape
{
    /**
     * @param array{
     *     comparator?: 'EQ'|'GT'|'GTE'|'LT'|'LTE'|'NE'|'CONTAINS'|'STARTS_WITH'|null,
     *     key?: string|null,
     *     tagValues?: list<TagValuePair>|null,
     *     target?: 'S3_OBJECT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
