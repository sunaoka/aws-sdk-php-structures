<?php

namespace Sunaoka\Aws\Structures\Connect\SearchResourceTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $tagKey
 * @property string $tagValue
 * @property 'STARTS_WITH'|'CONTAINS'|'EXACT' $tagKeyComparisonType
 * @property 'STARTS_WITH'|'CONTAINS'|'EXACT' $tagValueComparisonType
 */
class TagSearchCondition extends Shape
{
    /**
     * @param array{
     *     tagKey?: string,
     *     tagValue?: string,
     *     tagKeyComparisonType?: 'STARTS_WITH'|'CONTAINS'|'EXACT',
     *     tagValueComparisonType?: 'STARTS_WITH'|'CONTAINS'|'EXACT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
