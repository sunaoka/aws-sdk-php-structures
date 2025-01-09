<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DataSetId
 * @property string $Name
 * @property array<string, Shapes\PhysicalTable> $PhysicalTableMap
 * @property array<string, Shapes\LogicalTable> $LogicalTableMap
 * @property 'SPICE'|'DIRECT_QUERY' $ImportMode
 * @property list<Shapes\ColumnGroup> $ColumnGroups
 * @property array<string, Shapes\FieldFolder> $FieldFolders
 * @property list<Shapes\ResourcePermission> $Permissions
 * @property Shapes\RowLevelPermissionDataSet $RowLevelPermissionDataSet
 * @property Shapes\RowLevelPermissionTagConfiguration $RowLevelPermissionTagConfiguration
 * @property list<Shapes\ColumnLevelPermissionRule> $ColumnLevelPermissionRules
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\DataSetUsageConfiguration $DataSetUsageConfiguration
 * @property list<Shapes\DatasetParameter> $DatasetParameters
 * @property list<string> $FolderArns
 * @property Shapes\PerformanceConfiguration $PerformanceConfiguration
 */
class CreateDataSetRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DataSetId: string,
     *     Name: string,
     *     PhysicalTableMap: array<string, Shapes\PhysicalTable>,
     *     LogicalTableMap?: array<string, Shapes\LogicalTable>,
     *     ImportMode: 'SPICE'|'DIRECT_QUERY',
     *     ColumnGroups?: list<Shapes\ColumnGroup>,
     *     FieldFolders?: array<string, Shapes\FieldFolder>,
     *     Permissions?: list<Shapes\ResourcePermission>,
     *     RowLevelPermissionDataSet?: Shapes\RowLevelPermissionDataSet,
     *     RowLevelPermissionTagConfiguration?: Shapes\RowLevelPermissionTagConfiguration,
     *     ColumnLevelPermissionRules?: list<Shapes\ColumnLevelPermissionRule>,
     *     Tags?: list<Shapes\Tag>,
     *     DataSetUsageConfiguration?: Shapes\DataSetUsageConfiguration,
     *     DatasetParameters?: list<Shapes\DatasetParameter>,
     *     FolderArns?: list<string>,
     *     PerformanceConfiguration?: Shapes\PerformanceConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
