<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetTableOptimizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $catalogId
 * @property string $databaseName
 * @property string $tableName
 * @property TableOptimizer $tableOptimizer
 */
class BatchTableOptimizer extends Shape
{
    /**
     * @param array{
     *     catalogId?: string,
     *     databaseName?: string,
     *     tableName?: string,
     *     tableOptimizer?: TableOptimizer
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
