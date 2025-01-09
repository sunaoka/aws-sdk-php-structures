<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $PinnedLeftFields
 */
class TablePinnedFieldOptions extends Shape
{
    /**
     * @param array{PinnedLeftFields?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
