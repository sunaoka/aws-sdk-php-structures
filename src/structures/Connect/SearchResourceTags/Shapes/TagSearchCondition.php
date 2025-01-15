<?php

namespace Sunaoka\Aws\Structures\Connect\SearchResourceTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $tagKey
 * @property string|null $tagValue
 * @property 'STARTS_WITH'|'CONTAINS'|'EXACT'|null $tagKeyComparisonType
 * @property 'STARTS_WITH'|'CONTAINS'|'EXACT'|null $tagValueComparisonType
 */
class TagSearchCondition extends Shape
{
    /**
     * @param array{
     *     tagKey?: string|null,
     *     tagValue?: string|null,
     *     tagKeyComparisonType?: 'STARTS_WITH'|'CONTAINS'|'EXACT'|null,
     *     tagValueComparisonType?: 'STARTS_WITH'|'CONTAINS'|'EXACT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
