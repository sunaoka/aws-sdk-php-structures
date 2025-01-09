<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ColumnDepth
 * @property 'COLUMN'|'COLUMN_AND_ROW' $IncludeFec
 * @property int $RowLength
 */
class FecOutputSettings extends Shape
{
    /**
     * @param array{
     *     ColumnDepth?: int,
     *     IncludeFec?: 'COLUMN'|'COLUMN_AND_ROW',
     *     RowLength?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
