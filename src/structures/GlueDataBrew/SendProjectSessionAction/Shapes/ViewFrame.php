<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\SendProjectSessionAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $StartColumnIndex
 * @property int<0, 20> $ColumnRange
 * @property list<string> $HiddenColumns
 * @property int<0, max> $StartRowIndex
 * @property int $RowRange
 * @property 'ENABLE'|'DISABLE' $Analytics
 */
class ViewFrame extends Shape
{
    /**
     * @param array{
     *     StartColumnIndex: int<0, max>,
     *     ColumnRange?: int<0, 20>,
     *     HiddenColumns?: list<string>,
     *     StartRowIndex?: int<0, max>,
     *     RowRange?: int,
     *     Analytics?: 'ENABLE'|'DISABLE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
