<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUserHierarchyGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TagKey
 * @property string|null $TagValue
 */
class TagCondition extends Shape
{
    /**
     * @param array{
     *     TagKey?: string|null,
     *     TagValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
