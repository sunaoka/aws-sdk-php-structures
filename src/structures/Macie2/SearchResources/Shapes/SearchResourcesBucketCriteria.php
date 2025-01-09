<?php

namespace Sunaoka\Aws\Structures\Macie2\SearchResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SearchResourcesCriteriaBlock $excludes
 * @property SearchResourcesCriteriaBlock $includes
 */
class SearchResourcesBucketCriteria extends Shape
{
    /**
     * @param array{
     *     excludes?: SearchResourcesCriteriaBlock,
     *     includes?: SearchResourcesCriteriaBlock
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
