<?php

namespace Sunaoka\Aws\Structures\Connect\SearchResourceTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TagSearchCondition|null $TagSearchCondition
 */
class ResourceTagsSearchCriteria extends Shape
{
    /**
     * @param array{TagSearchCondition?: TagSearchCondition|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
