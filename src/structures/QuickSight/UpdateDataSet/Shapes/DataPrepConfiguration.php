<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, SourceTable> $SourceTableMap
 * @property array<string, TransformStep> $TransformStepMap
 * @property array<string, DestinationTable> $DestinationTableMap
 */
class DataPrepConfiguration extends Shape
{
    /**
     * @param array{
     *     SourceTableMap: array<string, SourceTable>,
     *     TransformStepMap: array<string, TransformStep>,
     *     DestinationTableMap: array<string, DestinationTable>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
