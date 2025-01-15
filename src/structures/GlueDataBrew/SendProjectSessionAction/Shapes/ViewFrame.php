<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\SendProjectSessionAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $StartColumnIndex
 * @property int<0, 20>|null $ColumnRange
 * @property list<string>|null $HiddenColumns
 * @property int<0, max>|null $StartRowIndex
 * @property int|null $RowRange
 * @property 'ENABLE'|'DISABLE'|null $Analytics
 */
class ViewFrame extends Shape
{
    /**
     * @param array{
     *     StartColumnIndex: int<0, max>,
     *     ColumnRange?: int<0, 20>|null,
     *     HiddenColumns?: list<string>|null,
     *     StartRowIndex?: int<0, max>|null,
     *     RowRange?: int|null,
     *     Analytics?: 'ENABLE'|'DISABLE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
