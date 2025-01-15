<?php

namespace Sunaoka\Aws\Structures\Macie2\SearchResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SearchResourcesCriteriaBlock|null $excludes
 * @property SearchResourcesCriteriaBlock|null $includes
 */
class SearchResourcesBucketCriteria extends Shape
{
    /**
     * @param array{
     *     excludes?: SearchResourcesCriteriaBlock|null,
     *     includes?: SearchResourcesCriteriaBlock|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
