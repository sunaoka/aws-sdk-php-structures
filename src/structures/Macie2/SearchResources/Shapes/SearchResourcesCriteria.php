<?php

namespace Sunaoka\Aws\Structures\Macie2\SearchResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SearchResourcesSimpleCriterion|null $simpleCriterion
 * @property SearchResourcesTagCriterion|null $tagCriterion
 */
class SearchResourcesCriteria extends Shape
{
    /**
     * @param array{
     *     simpleCriterion?: SearchResourcesSimpleCriterion|null,
     *     tagCriterion?: SearchResourcesTagCriterion|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
