<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property list<string> $columns
 */
class FieldFolder extends Shape
{
    /**
     * @param array{
     *     description?: string,
     *     columns?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
