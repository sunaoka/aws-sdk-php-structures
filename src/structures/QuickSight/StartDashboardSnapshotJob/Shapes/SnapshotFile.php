<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartDashboardSnapshotJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SnapshotFileSheetSelection> $SheetSelections
 * @property 'CSV'|'PDF'|'EXCEL' $FormatType
 */
class SnapshotFile extends Shape
{
    /**
     * @param array{
     *     SheetSelections: list<SnapshotFileSheetSelection>,
     *     FormatType: 'CSV'|'PDF'|'EXCEL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
