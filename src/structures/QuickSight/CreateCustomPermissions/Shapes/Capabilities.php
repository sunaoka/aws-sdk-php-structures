<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateCustomPermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DENY'|null $ExportToCsv
 * @property 'DENY'|null $ExportToExcel
 * @property 'DENY'|null $CreateAndUpdateThemes
 * @property 'DENY'|null $AddOrRunAnomalyDetectionForAnalyses
 * @property 'DENY'|null $ShareAnalyses
 * @property 'DENY'|null $CreateAndUpdateDatasets
 * @property 'DENY'|null $ShareDatasets
 * @property 'DENY'|null $SubscribeDashboardEmailReports
 * @property 'DENY'|null $CreateAndUpdateDashboardEmailReports
 * @property 'DENY'|null $ShareDashboards
 * @property 'DENY'|null $CreateAndUpdateThresholdAlerts
 * @property 'DENY'|null $RenameSharedFolders
 * @property 'DENY'|null $CreateSharedFolders
 * @property 'DENY'|null $CreateAndUpdateDataSources
 * @property 'DENY'|null $ShareDataSources
 * @property 'DENY'|null $ViewAccountSPICECapacity
 * @property 'DENY'|null $CreateSPICEDataset
 */
class Capabilities extends Shape
{
    /**
     * @param array{
     *     ExportToCsv?: 'DENY'|null,
     *     ExportToExcel?: 'DENY'|null,
     *     CreateAndUpdateThemes?: 'DENY'|null,
     *     AddOrRunAnomalyDetectionForAnalyses?: 'DENY'|null,
     *     ShareAnalyses?: 'DENY'|null,
     *     CreateAndUpdateDatasets?: 'DENY'|null,
     *     ShareDatasets?: 'DENY'|null,
     *     SubscribeDashboardEmailReports?: 'DENY'|null,
     *     CreateAndUpdateDashboardEmailReports?: 'DENY'|null,
     *     ShareDashboards?: 'DENY'|null,
     *     CreateAndUpdateThresholdAlerts?: 'DENY'|null,
     *     RenameSharedFolders?: 'DENY'|null,
     *     CreateSharedFolders?: 'DENY'|null,
     *     CreateAndUpdateDataSources?: 'DENY'|null,
     *     ShareDataSources?: 'DENY'|null,
     *     ViewAccountSPICECapacity?: 'DENY'|null,
     *     CreateSPICEDataset?: 'DENY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
