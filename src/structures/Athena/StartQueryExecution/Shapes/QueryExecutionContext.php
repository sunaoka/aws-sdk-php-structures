<?php

namespace Sunaoka\Aws\Structures\Athena\StartQueryExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Database
 * @property string $Catalog
 */
class QueryExecutionContext extends Shape
{
    /**
     * @param array{
     *     Database?: string,
     *     Catalog?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
