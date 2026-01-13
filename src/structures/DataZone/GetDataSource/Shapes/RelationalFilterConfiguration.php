<?php

namespace Sunaoka\Aws\Structures\DataZone\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $databaseName
 * @property string|null $schemaName
 * @property list<FilterExpression>|null $filterExpressions
 */
class RelationalFilterConfiguration extends Shape
{
    /**
     * @param array{
     *     databaseName: string,
     *     schemaName?: string|null,
     *     filterExpressions?: list<FilterExpression>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
