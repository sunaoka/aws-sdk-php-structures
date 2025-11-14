<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ColumnDepth
 * @property 'COLUMN'|'COLUMN_AND_ROW'|null $IncludeFec
 * @property int|null $RowLength
 */
class FecOutputSettings extends Shape
{
    /**
     * @param array{
     *     ColumnDepth?: int|null,
     *     IncludeFec?: 'COLUMN'|'COLUMN_AND_ROW'|null,
     *     RowLength?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
