<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardSnapshotJobResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SheetId
 * @property 'ALL_VISUALS'|'SELECTED_VISUALS' $SelectionScope
 * @property list<string> $VisualIds
 */
class SnapshotFileSheetSelection extends Shape
{
    /**
     * @param array{
     *     SheetId: string,
     *     SelectionScope: 'ALL_VISUALS'|'SELECTED_VISUALS',
     *     VisualIds?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
