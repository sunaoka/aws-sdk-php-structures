<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JoinInstruction|null $JoinInstruction
 * @property string|null $PhysicalTableId
 * @property string|null $DataSetArn
 */
class LogicalTableSource extends Shape
{
    /**
     * @param array{
     *     JoinInstruction?: JoinInstruction|null,
     *     PhysicalTableId?: string|null,
     *     DataSetArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
