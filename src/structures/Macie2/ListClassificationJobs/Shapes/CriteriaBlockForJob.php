<?php

namespace Sunaoka\Aws\Structures\Macie2\ListClassificationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CriteriaForJob> $and
 */
class CriteriaBlockForJob extends Shape
{
    /**
     * @param array{and?: list<CriteriaForJob>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
