<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Alias
 * @property TransformOperationSource $Source
 * @property list<CastColumnTypeOperation> $CastColumnTypeOperations
 */
class CastColumnTypesOperation extends Shape
{
    /**
     * @param array{
     *     Alias: string,
     *     Source: TransformOperationSource,
     *     CastColumnTypeOperations: list<CastColumnTypeOperation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
