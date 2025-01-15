<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $databaseName
 * @property list<FilterExpression>|null $filterExpressions
 * @property string|null $schemaName
 */
class RelationalFilterConfiguration extends Shape
{
    /**
     * @param array{
     *     databaseName: string,
     *     filterExpressions?: list<FilterExpression>|null,
     *     schemaName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
