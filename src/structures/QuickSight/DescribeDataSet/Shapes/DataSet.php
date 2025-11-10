<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $DataSetId
 * @property string|null $Name
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property array<string, PhysicalTable>|null $PhysicalTableMap
 * @property array<string, LogicalTable>|null $LogicalTableMap
 * @property list<OutputColumn>|null $OutputColumns
 * @property 'SPICE'|'DIRECT_QUERY'|null $ImportMode
 * @property int|null $ConsumedSpiceCapacityInBytes
 * @property list<ColumnGroup>|null $ColumnGroups
 * @property array<string, FieldFolder>|null $FieldFolders
 * @property RowLevelPermissionDataSet|null $RowLevelPermissionDataSet
 * @property RowLevelPermissionTagConfiguration|null $RowLevelPermissionTagConfiguration
 * @property list<ColumnLevelPermissionRule>|null $ColumnLevelPermissionRules
 * @property DataSetUsageConfiguration|null $DataSetUsageConfiguration
 * @property list<DatasetParameter>|null $DatasetParameters
 * @property PerformanceConfiguration|null $PerformanceConfiguration
 * @property 'RLS_RULES'|null $UseAs
 * @property DataPrepConfiguration|null $DataPrepConfiguration
 * @property SemanticModelConfiguration|null $SemanticModelConfiguration
 */
class DataSet extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     DataSetId?: string|null,
     *     Name?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     PhysicalTableMap?: array<string, PhysicalTable>|null,
     *     LogicalTableMap?: array<string, LogicalTable>|null,
     *     OutputColumns?: list<OutputColumn>|null,
     *     ImportMode?: 'SPICE'|'DIRECT_QUERY'|null,
     *     ConsumedSpiceCapacityInBytes?: int|null,
     *     ColumnGroups?: list<ColumnGroup>|null,
     *     FieldFolders?: array<string, FieldFolder>|null,
     *     RowLevelPermissionDataSet?: RowLevelPermissionDataSet|null,
     *     RowLevelPermissionTagConfiguration?: RowLevelPermissionTagConfiguration|null,
     *     ColumnLevelPermissionRules?: list<ColumnLevelPermissionRule>|null,
     *     DataSetUsageConfiguration?: DataSetUsageConfiguration|null,
     *     DatasetParameters?: list<DatasetParameter>|null,
     *     PerformanceConfiguration?: PerformanceConfiguration|null,
     *     UseAs?: 'RLS_RULES'|null,
     *     DataPrepConfiguration?: DataPrepConfiguration|null,
     *     SemanticModelConfiguration?: SemanticModelConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
