<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeCustomPermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DENY' $ExportToCsv
 * @property 'DENY' $ExportToExcel
 * @property 'DENY' $CreateAndUpdateThemes
 * @property 'DENY' $AddOrRunAnomalyDetectionForAnalyses
 * @property 'DENY' $ShareAnalyses
 * @property 'DENY' $CreateAndUpdateDatasets
 * @property 'DENY' $ShareDatasets
 * @property 'DENY' $SubscribeDashboardEmailReports
 * @property 'DENY' $CreateAndUpdateDashboardEmailReports
 * @property 'DENY' $ShareDashboards
 * @property 'DENY' $CreateAndUpdateThresholdAlerts
 * @property 'DENY' $RenameSharedFolders
 * @property 'DENY' $CreateSharedFolders
 * @property 'DENY' $CreateAndUpdateDataSources
 * @property 'DENY' $ShareDataSources
 * @property 'DENY' $ViewAccountSPICECapacity
 * @property 'DENY' $CreateSPICEDataset
 */
class Capabilities extends Shape
{
    /**
     * @param array{
     *     ExportToCsv?: 'DENY',
     *     ExportToExcel?: 'DENY',
     *     CreateAndUpdateThemes?: 'DENY',
     *     AddOrRunAnomalyDetectionForAnalyses?: 'DENY',
     *     ShareAnalyses?: 'DENY',
     *     CreateAndUpdateDatasets?: 'DENY',
     *     ShareDatasets?: 'DENY',
     *     SubscribeDashboardEmailReports?: 'DENY',
     *     CreateAndUpdateDashboardEmailReports?: 'DENY',
     *     ShareDashboards?: 'DENY',
     *     CreateAndUpdateThresholdAlerts?: 'DENY',
     *     RenameSharedFolders?: 'DENY',
     *     CreateSharedFolders?: 'DENY',
     *     CreateAndUpdateDataSources?: 'DENY',
     *     ShareDataSources?: 'DENY',
     *     ViewAccountSPICECapacity?: 'DENY',
     *     CreateSPICEDataset?: 'DENY'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
