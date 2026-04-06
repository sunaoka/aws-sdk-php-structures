<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Alias
 * @property TransformOperationSource $Source
 * @property list<string>|null $GroupByColumnNames
 * @property list<Aggregation> $Aggregations
 */
class AggregateOperation extends Shape
{
    /**
     * @param array{
     *     Alias: string,
     *     Source: TransformOperationSource,
     *     GroupByColumnNames?: list<string>|null,
     *     Aggregations: list<Aggregation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
