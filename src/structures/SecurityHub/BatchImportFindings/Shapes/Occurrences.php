<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Range>|null $LineRanges
 * @property list<Range>|null $OffsetRanges
 * @property list<Page>|null $Pages
 * @property list<Record>|null $Records
 * @property list<Cell>|null $Cells
 */
class Occurrences extends Shape
{
    /**
     * @param array{
     *     LineRanges?: list<Range>|null,
     *     OffsetRanges?: list<Range>|null,
     *     Pages?: list<Page>|null,
     *     Records?: list<Record>|null,
     *     Cells?: list<Cell>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
