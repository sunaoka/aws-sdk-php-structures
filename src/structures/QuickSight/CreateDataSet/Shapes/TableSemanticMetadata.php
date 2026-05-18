<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SharedColumnSemanticMetadata>|null $ColumnMetadata
 */
class TableSemanticMetadata extends Shape
{
    /**
     * @param array{ColumnMetadata?: list<SharedColumnSemanticMetadata>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
