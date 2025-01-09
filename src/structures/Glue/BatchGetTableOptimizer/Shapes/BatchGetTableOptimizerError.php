<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetTableOptimizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ErrorDetail $error
 * @property string $catalogId
 * @property string $databaseName
 * @property string $tableName
 * @property 'compaction'|'retention'|'orphan_file_deletion' $type
 */
class BatchGetTableOptimizerError extends Shape
{
    /**
     * @param array{
     *     error?: ErrorDetail,
     *     catalogId?: string,
     *     databaseName?: string,
     *     tableName?: string,
     *     type?: 'compaction'|'retention'|'orphan_file_deletion'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
