<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetTableOptimizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $catalogId
 * @property string|null $databaseName
 * @property string|null $tableName
 * @property TableOptimizer|null $tableOptimizer
 */
class BatchTableOptimizer extends Shape
{
    /**
     * @param array{
     *     catalogId?: string|null,
     *     databaseName?: string|null,
     *     tableName?: string|null,
     *     tableOptimizer?: TableOptimizer|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
