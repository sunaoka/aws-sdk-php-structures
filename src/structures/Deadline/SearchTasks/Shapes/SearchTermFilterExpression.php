<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $searchTerm
 */
class SearchTermFilterExpression extends Shape
{
    /**
     * @param array{searchTerm: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
