<?php

namespace Sunaoka\Aws\Structures\Macie2\SearchResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SearchResourcesSimpleCriterion $simpleCriterion
 * @property SearchResourcesTagCriterion $tagCriterion
 */
class SearchResourcesCriteria extends Shape
{
    /**
     * @param array{
     *     simpleCriterion?: SearchResourcesSimpleCriterion,
     *     tagCriterion?: SearchResourcesTagCriterion
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
