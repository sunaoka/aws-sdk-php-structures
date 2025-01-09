<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Range> $LineRanges
 * @property list<Range> $OffsetRanges
 * @property list<Page> $Pages
 * @property list<Record> $Records
 * @property list<Cell> $Cells
 */
class Occurrences extends Shape
{
    /**
     * @param array{
     *     LineRanges?: list<Range>,
     *     OffsetRanges?: list<Range>,
     *     Pages?: list<Page>,
     *     Records?: list<Record>,
     *     Cells?: list<Cell>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
