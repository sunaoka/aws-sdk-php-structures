<?php

namespace Sunaoka\Aws\Structures\Macie2\CreateClassificationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<JobScopeTerm> $and
 */
class JobScopingBlock extends Shape
{
    /**
     * @param array{and?: list<JobScopeTerm>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
