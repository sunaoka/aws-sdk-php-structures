<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $PinnedLeftFields
 */
class TablePinnedFieldOptions extends Shape
{
    /**
     * @param array{PinnedLeftFields?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
