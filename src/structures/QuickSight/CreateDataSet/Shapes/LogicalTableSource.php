<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JoinInstruction $JoinInstruction
 * @property string $PhysicalTableId
 * @property string $DataSetArn
 */
class LogicalTableSource extends Shape
{
    /**
     * @param array{
     *     JoinInstruction?: JoinInstruction,
     *     PhysicalTableId?: string,
     *     DataSetArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
