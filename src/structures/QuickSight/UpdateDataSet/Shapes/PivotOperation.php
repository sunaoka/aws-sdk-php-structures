<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Alias
 * @property TransformOperationSource $Source
 * @property list<string>|null $GroupByColumnNames
 * @property ValueColumnConfiguration $ValueColumnConfiguration
 * @property PivotConfiguration $PivotConfiguration
 */
class PivotOperation extends Shape
{
    /**
     * @param array{
     *     Alias: string,
     *     Source: TransformOperationSource,
     *     GroupByColumnNames?: list<string>|null,
     *     ValueColumnConfiguration: ValueColumnConfiguration,
     *     PivotConfiguration: PivotConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
