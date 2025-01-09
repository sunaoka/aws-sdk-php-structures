<?php

namespace Sunaoka\Aws\Structures\Connect\SearchResourceTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TagSearchCondition $TagSearchCondition
 */
class ResourceTagsSearchCriteria extends Shape
{
    /**
     * @param array{TagSearchCondition?: TagSearchCondition} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
