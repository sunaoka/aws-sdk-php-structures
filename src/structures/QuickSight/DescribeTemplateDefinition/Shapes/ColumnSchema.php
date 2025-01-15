<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $DataType
 * @property string|null $GeographicRole
 */
class ColumnSchema extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     DataType?: string|null,
     *     GeographicRole?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
