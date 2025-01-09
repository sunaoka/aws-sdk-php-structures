<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomValuesConfiguration $CustomValuesConfiguration
 * @property 'ALL_VALUES' $SelectAllValueOptions
 * @property string $SourceParameterName
 * @property string $SourceField
 * @property ColumnIdentifier $SourceColumn
 */
class DestinationParameterValueConfiguration extends Shape
{
    /**
     * @param array{
     *     CustomValuesConfiguration?: CustomValuesConfiguration,
     *     SelectAllValueOptions?: 'ALL_VALUES',
     *     SourceParameterName?: string,
     *     SourceField?: string,
     *     SourceColumn?: ColumnIdentifier
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
