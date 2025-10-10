<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListCustomPermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DENY'|null $ExportToCsv
 * @property 'DENY'|null $ExportToExcel
 * @property 'DENY'|null $ExportToPdf
 * @property 'DENY'|null $PrintReports
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
 * @property 'DENY'|null $ExportToPdfInScheduledReports
 * @property 'DENY'|null $ExportToCsvInScheduledReports
 * @property 'DENY'|null $ExportToExcelInScheduledReports
 * @property 'DENY'|null $IncludeContentInScheduledReportsEmail
 * @property 'DENY'|null $Dashboard
 * @property 'DENY'|null $Analysis
 * @property 'DENY'|null $Automate
 * @property 'DENY'|null $Flow
 * @property 'DENY'|null $PublishWithoutApproval
 * @property 'DENY'|null $UseBedrockModels
 * @property 'DENY'|null $PerformFlowUiTask
 * @property 'DENY'|null $UseAgentWebSearch
 * @property 'DENY'|null $KnowledgeBase
 * @property 'DENY'|null $Action
 * @property 'DENY'|null $Space
 * @property 'DENY'|null $ChatAgent
 * @property 'DENY'|null $CreateChatAgents
 * @property 'DENY'|null $Research
 */
class Capabilities extends Shape
{
    /**
     * @param array{
     *     ExportToCsv?: 'DENY'|null,
     *     ExportToExcel?: 'DENY'|null,
     *     ExportToPdf?: 'DENY'|null,
     *     PrintReports?: 'DENY'|null,
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
     *     CreateSPICEDataset?: 'DENY'|null,
     *     ExportToPdfInScheduledReports?: 'DENY'|null,
     *     ExportToCsvInScheduledReports?: 'DENY'|null,
     *     ExportToExcelInScheduledReports?: 'DENY'|null,
     *     IncludeContentInScheduledReportsEmail?: 'DENY'|null,
     *     Dashboard?: 'DENY'|null,
     *     Analysis?: 'DENY'|null,
     *     Automate?: 'DENY'|null,
     *     Flow?: 'DENY'|null,
     *     PublishWithoutApproval?: 'DENY'|null,
     *     UseBedrockModels?: 'DENY'|null,
     *     PerformFlowUiTask?: 'DENY'|null,
     *     UseAgentWebSearch?: 'DENY'|null,
     *     KnowledgeBase?: 'DENY'|null,
     *     Action?: 'DENY'|null,
     *     Space?: 'DENY'|null,
     *     ChatAgent?: 'DENY'|null,
     *     CreateChatAgents?: 'DENY'|null,
     *     Research?: 'DENY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
