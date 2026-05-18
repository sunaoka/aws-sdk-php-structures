<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ColumnDescription|null $Description
 * @property AdditionalNotes|null $AdditionalNotes
 * @property ColumnSemanticType|null $SemanticType
 */
class ColumnSemanticProperty extends Shape
{
    /**
     * @param array{
     *     Description?: ColumnDescription|null,
     *     AdditionalNotes?: AdditionalNotes|null,
     *     SemanticType?: ColumnSemanticType|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
