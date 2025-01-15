<?php

namespace Sunaoka\Aws\Structures\Macie2\ListClassificationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SimpleCriterionForJob|null $simpleCriterion
 * @property TagCriterionForJob|null $tagCriterion
 */
class CriteriaForJob extends Shape
{
    /**
     * @param array{
     *     simpleCriterion?: SimpleCriterionForJob|null,
     *     tagCriterion?: TagCriterionForJob|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
