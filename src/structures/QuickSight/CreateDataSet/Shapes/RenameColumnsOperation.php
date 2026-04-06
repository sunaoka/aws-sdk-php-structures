<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Alias
 * @property TransformOperationSource $Source
 * @property list<RenameColumnOperation> $RenameColumnOperations
 */
class RenameColumnsOperation extends Shape
{
    /**
     * @param array{
     *     Alias: string,
     *     Source: TransformOperationSource,
     *     RenameColumnOperations: list<RenameColumnOperation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
