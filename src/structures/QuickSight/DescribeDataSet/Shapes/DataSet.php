<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $DataSetId
 * @property string $Name
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property array<string, PhysicalTable> $PhysicalTableMap
 * @property array<string, LogicalTable> $LogicalTableMap
 * @property list<OutputColumn> $OutputColumns
 * @property 'SPICE'|'DIRECT_QUERY' $ImportMode
 * @property int $ConsumedSpiceCapacityInBytes
 * @property list<ColumnGroup> $ColumnGroups
 * @property array<string, FieldFolder> $FieldFolders
 * @property RowLevelPermissionDataSet $RowLevelPermissionDataSet
 * @property RowLevelPermissionTagConfiguration $RowLevelPermissionTagConfiguration
 * @property list<ColumnLevelPermissionRule> $ColumnLevelPermissionRules
 * @property DataSetUsageConfiguration $DataSetUsageConfiguration
 * @property list<DatasetParameter> $DatasetParameters
 * @property PerformanceConfiguration $PerformanceConfiguration
 */
class DataSet extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     DataSetId?: string,
     *     Name?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     PhysicalTableMap?: array<string, PhysicalTable>,
     *     LogicalTableMap?: array<string, LogicalTable>,
     *     OutputColumns?: list<OutputColumn>,
     *     ImportMode?: 'SPICE'|'DIRECT_QUERY',
     *     ConsumedSpiceCapacityInBytes?: int,
     *     ColumnGroups?: list<ColumnGroup>,
     *     FieldFolders?: array<string, FieldFolder>,
     *     RowLevelPermissionDataSet?: RowLevelPermissionDataSet,
     *     RowLevelPermissionTagConfiguration?: RowLevelPermissionTagConfiguration,
     *     ColumnLevelPermissionRules?: list<ColumnLevelPermissionRule>,
     *     DataSetUsageConfiguration?: DataSetUsageConfiguration,
     *     DatasetParameters?: list<DatasetParameter>,
     *     PerformanceConfiguration?: PerformanceConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
