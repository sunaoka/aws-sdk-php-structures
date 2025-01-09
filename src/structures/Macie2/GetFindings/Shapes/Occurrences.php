<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Cell> $cells
 * @property list<Range> $lineRanges
 * @property list<Range> $offsetRanges
 * @property list<Page> $pages
 * @property list<Record> $records
 */
class Occurrences extends Shape
{
    /**
     * @param array{
     *     cells?: list<Cell>,
     *     lineRanges?: list<Range>,
     *     offsetRanges?: list<Range>,
     *     pages?: list<Page>,
     *     records?: list<Record>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
