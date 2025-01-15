<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Cell>|null $cells
 * @property list<Range>|null $lineRanges
 * @property list<Range>|null $offsetRanges
 * @property list<Page>|null $pages
 * @property list<Record>|null $records
 */
class Occurrences extends Shape
{
    /**
     * @param array{
     *     cells?: list<Cell>|null,
     *     lineRanges?: list<Range>|null,
     *     offsetRanges?: list<Range>|null,
     *     pages?: list<Page>|null,
     *     records?: list<Record>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
