<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<4, 20> $ColumnDepth
 * @property 'COLUMN'|'COLUMN_AND_ROW' $IncludeFec
 * @property int<1, 20> $RowLength
 */
class FecOutputSettings extends Shape
{
    /**
     * @param array{
     *     ColumnDepth?: int<4, 20>,
     *     IncludeFec?: 'COLUMN'|'COLUMN_AND_ROW',
     *     RowLength?: int<1, 20>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
