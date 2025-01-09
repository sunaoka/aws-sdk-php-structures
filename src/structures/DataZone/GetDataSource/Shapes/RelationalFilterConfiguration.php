<?php

namespace Sunaoka\Aws\Structures\DataZone\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $databaseName
 * @property list<FilterExpression> $filterExpressions
 * @property string $schemaName
 */
class RelationalFilterConfiguration extends Shape
{
    /**
     * @param array{
     *     databaseName: string,
     *     filterExpressions?: list<FilterExpression>,
     *     schemaName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
