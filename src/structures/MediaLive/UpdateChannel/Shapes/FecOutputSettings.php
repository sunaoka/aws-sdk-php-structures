<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<4, 20>|null $ColumnDepth
 * @property 'COLUMN'|'COLUMN_AND_ROW'|null $IncludeFec
 * @property int<1, 20>|null $RowLength
 */
class FecOutputSettings extends Shape
{
    /**
     * @param array{
     *     ColumnDepth?: int<4, 20>|null,
     *     IncludeFec?: 'COLUMN'|'COLUMN_AND_ROW'|null,
     *     RowLength?: int<1, 20>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
