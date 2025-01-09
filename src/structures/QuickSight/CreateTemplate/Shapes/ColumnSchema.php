<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $DataType
 * @property string $GeographicRole
 */
class ColumnSchema extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     DataType?: string,
     *     GeographicRole?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
