<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceTableId
 * @property list<DataSetColumnIdMapping>|null $ColumnIdMappings
 */
class ImportTableOperationSource extends Shape
{
    /**
     * @param array{
     *     SourceTableId: string,
     *     ColumnIdMappings?: list<DataSetColumnIdMapping>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
