<?php

namespace Sunaoka\Aws\Structures\Macie2\CreateClassificationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQ'|'GT'|'GTE'|'LT'|'LTE'|'NE'|'CONTAINS'|'STARTS_WITH' $comparator
 * @property string $key
 * @property list<TagValuePair> $tagValues
 * @property 'S3_OBJECT' $target
 */
class TagScopeTerm extends Shape
{
    /**
     * @param array{
     *     comparator?: 'EQ'|'GT'|'GTE'|'LT'|'LTE'|'NE'|'CONTAINS'|'STARTS_WITH',
     *     key?: string,
     *     tagValues?: list<TagValuePair>,
     *     target?: 'S3_OBJECT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
