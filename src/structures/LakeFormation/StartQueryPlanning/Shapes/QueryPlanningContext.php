<?php

namespace Sunaoka\Aws\Structures\LakeFormation\StartQueryPlanning\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property \Aws\Api\DateTimeResult $QueryAsOfTime
 * @property array<string, string> $QueryParameters
 * @property string $TransactionId
 */
class QueryPlanningContext extends Shape
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     DatabaseName: string,
     *     QueryAsOfTime?: \Aws\Api\DateTimeResult,
     *     QueryParameters?: array<string, string>,
     *     TransactionId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
