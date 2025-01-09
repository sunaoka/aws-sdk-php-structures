<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\SendProjectSessionAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $StartColumnIndex
 * @property int $ColumnRange
 * @property list<string> $HiddenColumns
 * @property int $StartRowIndex
 * @property int $RowRange
 * @property 'ENABLE'|'DISABLE' $Analytics
 */
class ViewFrame extends Shape
{
    /**
     * @param array{
     *     StartColumnIndex: int,
     *     ColumnRange?: int,
     *     HiddenColumns?: list<string>,
     *     StartRowIndex?: int,
     *     RowRange?: int,
     *     Analytics?: 'ENABLE'|'DISABLE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
