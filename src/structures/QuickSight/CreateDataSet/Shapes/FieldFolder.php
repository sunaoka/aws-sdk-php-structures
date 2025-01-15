<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property list<string>|null $columns
 */
class FieldFolder extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     columns?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
