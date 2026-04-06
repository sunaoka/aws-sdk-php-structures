<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\GetStatementResultV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CSVRecords
 */
class QueryRecords extends Shape
{
    /**
     * @param array{CSVRecords?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
