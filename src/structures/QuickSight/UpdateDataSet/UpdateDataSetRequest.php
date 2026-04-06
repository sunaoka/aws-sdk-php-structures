<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DataSetId
 * @property string $Name
 * @property array<string, Shapes\PhysicalTable> $PhysicalTableMap
 * @property array<string, Shapes\LogicalTable>|null $LogicalTableMap
 * @property 'SPICE'|'DIRECT_QUERY' $ImportMode
 * @property list<Shapes\ColumnGroup>|null $ColumnGroups
 * @property array<string, Shapes\FieldFolder>|null $FieldFolders
 * @property Shapes\RowLevelPermissionDataSet|null $RowLevelPermissionDataSet
 * @property Shapes\RowLevelPermissionTagConfiguration|null $RowLevelPermissionTagConfiguration
 * @property list<Shapes\ColumnLevelPermissionRule>|null $ColumnLevelPermissionRules
 * @property Shapes\DataSetUsageConfiguration|null $DataSetUsageConfiguration
 * @property list<Shapes\DatasetParameter>|null $DatasetParameters
 * @property Shapes\PerformanceConfiguration|null $PerformanceConfiguration
 * @property Shapes\DataPrepConfiguration|null $DataPrepConfiguration
 * @property Shapes\SemanticModelConfiguration|null $SemanticModelConfiguration
 */
class UpdateDataSetRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DataSetId: string,
     *     Name: string,
     *     PhysicalTableMap: array<string, Shapes\PhysicalTable>,
     *     LogicalTableMap?: array<string, Shapes\LogicalTable>|null,
     *     ImportMode: 'SPICE'|'DIRECT_QUERY',
     *     ColumnGroups?: list<Shapes\ColumnGroup>|null,
     *     FieldFolders?: array<string, Shapes\FieldFolder>|null,
     *     RowLevelPermissionDataSet?: Shapes\RowLevelPermissionDataSet|null,
     *     RowLevelPermissionTagConfiguration?: Shapes\RowLevelPermissionTagConfiguration|null,
     *     ColumnLevelPermissionRules?: list<Shapes\ColumnLevelPermissionRule>|null,
     *     DataSetUsageConfiguration?: Shapes\DataSetUsageConfiguration|null,
     *     DatasetParameters?: list<Shapes\DatasetParameter>|null,
     *     PerformanceConfiguration?: Shapes\PerformanceConfiguration|null,
     *     DataPrepConfiguration?: Shapes\DataPrepConfiguration|null,
     *     SemanticModelConfiguration?: Shapes\SemanticModelConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
