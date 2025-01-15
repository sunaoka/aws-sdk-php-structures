<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldSortOptions>|null $CategorySort
 */
class FilledMapSortConfiguration extends Shape
{
    /**
     * @param array{CategorySort?: list<FieldSortOptions>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
