<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardSnapshotJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SheetId
 * @property 'ALL_VISUALS'|'SELECTED_VISUALS' $SelectionScope
 * @property list<string>|null $VisualIds
 */
class SnapshotFileSheetSelection extends Shape
{
    /**
     * @param array{
     *     SheetId: string,
     *     SelectionScope: 'ALL_VISUALS'|'SELECTED_VISUALS',
     *     VisualIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
