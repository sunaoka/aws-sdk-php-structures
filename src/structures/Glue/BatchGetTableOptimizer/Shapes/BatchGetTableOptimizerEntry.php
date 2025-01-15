<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetTableOptimizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $catalogId
 * @property string|null $databaseName
 * @property string|null $tableName
 * @property 'compaction'|'retention'|'orphan_file_deletion'|null $type
 */
class BatchGetTableOptimizerEntry extends Shape
{
    /**
     * @param array{
     *     catalogId?: string|null,
     *     databaseName?: string|null,
     *     tableName?: string|null,
     *     type?: 'compaction'|'retention'|'orphan_file_deletion'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
