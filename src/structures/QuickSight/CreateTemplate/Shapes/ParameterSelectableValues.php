<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Values
 * @property ColumnIdentifier|null $LinkToDataSetColumn
 */
class ParameterSelectableValues extends Shape
{
    /**
     * @param array{
     *     Values?: list<string>|null,
     *     LinkToDataSetColumn?: ColumnIdentifier|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
