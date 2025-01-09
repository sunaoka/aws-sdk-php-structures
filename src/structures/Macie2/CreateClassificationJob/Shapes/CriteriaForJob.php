<?php

namespace Sunaoka\Aws\Structures\Macie2\CreateClassificationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SimpleCriterionForJob $simpleCriterion
 * @property TagCriterionForJob $tagCriterion
 */
class CriteriaForJob extends Shape
{
    /**
     * @param array{
     *     simpleCriterion?: SimpleCriterionForJob,
     *     tagCriterion?: TagCriterionForJob
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
