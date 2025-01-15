<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Database
 * @property string|null $Catalog
 */
class QueryExecutionContext extends Shape
{
    /**
     * @param array{
     *     Database?: string|null,
     *     Catalog?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
