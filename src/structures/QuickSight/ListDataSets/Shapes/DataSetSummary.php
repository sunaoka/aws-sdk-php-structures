<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListDataSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $DataSetId
 * @property string|null $Name
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property 'SPICE'|'DIRECT_QUERY'|null $ImportMode
 * @property RowLevelPermissionDataSet|null $RowLevelPermissionDataSet
 * @property bool|null $RowLevelPermissionTagConfigurationApplied
 * @property bool|null $ColumnLevelPermissionRulesApplied
 * @property 'RLS_RULES'|null $UseAs
 */
class DataSetSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     DataSetId?: string|null,
     *     Name?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     ImportMode?: 'SPICE'|'DIRECT_QUERY'|null,
     *     RowLevelPermissionDataSet?: RowLevelPermissionDataSet|null,
     *     RowLevelPermissionTagConfigurationApplied?: bool|null,
     *     ColumnLevelPermissionRulesApplied?: bool|null,
     *     UseAs?: 'RLS_RULES'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
