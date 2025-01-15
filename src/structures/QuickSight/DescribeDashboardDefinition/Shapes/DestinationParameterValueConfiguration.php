<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomValuesConfiguration|null $CustomValuesConfiguration
 * @property 'ALL_VALUES'|null $SelectAllValueOptions
 * @property string|null $SourceParameterName
 * @property string|null $SourceField
 * @property ColumnIdentifier|null $SourceColumn
 */
class DestinationParameterValueConfiguration extends Shape
{
    /**
     * @param array{
     *     CustomValuesConfiguration?: CustomValuesConfiguration|null,
     *     SelectAllValueOptions?: 'ALL_VALUES'|null,
     *     SourceParameterName?: string|null,
     *     SourceField?: string|null,
     *     SourceColumn?: ColumnIdentifier|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
