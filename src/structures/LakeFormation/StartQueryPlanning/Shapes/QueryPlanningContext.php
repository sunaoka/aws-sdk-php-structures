<?php

namespace Sunaoka\Aws\Structures\LakeFormation\StartQueryPlanning\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CatalogId
 * @property string $DatabaseName
 * @property \Aws\Api\DateTimeResult|null $QueryAsOfTime
 * @property array<string, string>|null $QueryParameters
 * @property string|null $TransactionId
 */
class QueryPlanningContext extends Shape
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     DatabaseName: string,
     *     QueryAsOfTime?: \Aws\Api\DateTimeResult|null,
     *     QueryParameters?: array<string, string>|null,
     *     TransactionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
