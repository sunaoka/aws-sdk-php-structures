<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchDataSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $DataSetId
 * @property string $Name
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property 'SPICE'|'DIRECT_QUERY' $ImportMode
 * @property RowLevelPermissionDataSet $RowLevelPermissionDataSet
 * @property bool $RowLevelPermissionTagConfigurationApplied
 * @property bool $ColumnLevelPermissionRulesApplied
 */
class DataSetSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     DataSetId?: string,
     *     Name?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     ImportMode?: 'SPICE'|'DIRECT_QUERY',
     *     RowLevelPermissionDataSet?: RowLevelPermissionDataSet,
     *     RowLevelPermissionTagConfigurationApplied?: bool,
     *     ColumnLevelPermissionRulesApplied?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
