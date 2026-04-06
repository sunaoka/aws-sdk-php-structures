<?php

namespace Sunaoka\Aws\Structures\Honeycode\GetScreenData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ColumnMetadata> $headers
 * @property list<ResultRow> $rows
 */
class ResultSet extends Shape
{
    /**
     * @param array{
     *     headers: list<ColumnMetadata>,
     *     rows: list<ResultRow>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
