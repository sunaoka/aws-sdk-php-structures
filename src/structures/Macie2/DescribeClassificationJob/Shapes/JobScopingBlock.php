<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeClassificationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<JobScopeTerm>|null $and
 */
class JobScopingBlock extends Shape
{
    /**
     * @param array{and?: list<JobScopeTerm>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
