<?php

namespace Sunaoka\Aws\Structures\Macie2\ListClassificationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CriteriaForJob>|null $and
 */
class CriteriaBlockForJob extends Shape
{
    /**
     * @param array{and?: list<CriteriaForJob>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
