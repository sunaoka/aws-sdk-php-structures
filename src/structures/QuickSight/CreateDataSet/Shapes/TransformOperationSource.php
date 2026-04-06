<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransformOperationId
 * @property list<DataSetColumnIdMapping>|null $ColumnIdMappings
 */
class TransformOperationSource extends Shape
{
    /**
     * @param array{
     *     TransformOperationId: string,
     *     ColumnIdMappings?: list<DataSetColumnIdMapping>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
