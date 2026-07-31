<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListCustomPermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DENY'|'ALLOW'|null $ExportToCsv
 * @property 'DENY'|'ALLOW'|null $ExportToExcel
 * @property 'DENY'|'ALLOW'|null $ExportToPdf
 * @property 'DENY'|'ALLOW'|null $PrintReports
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateThemes
 * @property 'DENY'|'ALLOW'|null $AddOrRunAnomalyDetectionForAnalyses
 * @property 'DENY'|'ALLOW'|null $ShareAnalyses
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateDatasets
 * @property 'DENY'|'ALLOW'|null $ShareDatasets
 * @property 'DENY'|'ALLOW'|null $SubscribeDashboardEmailReports
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateDashboardEmailReports
 * @property 'DENY'|'ALLOW'|null $ShareDashboards
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateThresholdAlerts
 * @property 'DENY'|'ALLOW'|null $RenameSharedFolders
 * @property 'DENY'|'ALLOW'|null $CreateSharedFolders
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateDataSources
 * @property 'DENY'|'ALLOW'|null $ShareDataSources
 * @property 'DENY'|'ALLOW'|null $ViewAccountSPICECapacity
 * @property 'DENY'|'ALLOW'|null $CreateSPICEDataset
 * @property 'DENY'|'ALLOW'|null $ExportToPdfInScheduledReports
 * @property 'DENY'|'ALLOW'|null $ExportToCsvInScheduledReports
 * @property 'DENY'|'ALLOW'|null $ExportToExcelInScheduledReports
 * @property 'DENY'|'ALLOW'|null $IncludeContentInScheduledReportsEmail
 * @property 'DENY'|'ALLOW'|null $Dashboard
 * @property 'DENY'|'ALLOW'|null $Analysis
 * @property 'DENY'|'ALLOW'|null $Automate
 * @property 'DENY'|'ALLOW'|null $Flow
 * @property 'DENY'|'ALLOW'|null $Apps
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateApps
 * @property 'DENY'|'ALLOW'|null $ShareApps
 * @property 'DENY'|'ALLOW'|null $InvokeAppsAIInference
 * @property 'DENY'|'ALLOW'|null $AccessAppsNativeDataStore
 * @property 'DENY'|'ALLOW'|null $PublishWithoutApproval
 * @property 'DENY'|'ALLOW'|null $UseBedrockModels
 * @property 'DENY'|'ALLOW'|null $PerformFlowUiTask
 * @property 'DENY'|'ALLOW'|null $ApproveFlowShareRequests
 * @property 'DENY'|'ALLOW'|null $UseAgentWebSearch
 * @property 'DENY'|'ALLOW'|null $KnowledgeBase
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateKnowledgeBases
 * @property 'DENY'|'ALLOW'|null $ShareKnowledgeBases
 * @property 'DENY'|'ALLOW'|null $SharePointKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateSharePointKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $ShareSharePointKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $UseSharePointKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $GoogleDriveKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateGoogleDriveKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $ShareGoogleDriveKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $UseGoogleDriveKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $WebCrawlerKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateWebCrawlerKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $ShareWebCrawlerKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $UseWebCrawlerKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $S3KnowledgeBase
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateS3KnowledgeBase
 * @property 'DENY'|'ALLOW'|null $ShareS3KnowledgeBase
 * @property 'DENY'|'ALLOW'|null $UseS3KnowledgeBase
 * @property 'DENY'|'ALLOW'|null $ConfluenceKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateConfluenceKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $ShareConfluenceKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $UseConfluenceKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $OneDriveKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateOneDriveKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $ShareOneDriveKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $UseOneDriveKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $QBusinessKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateQBusinessKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $ShareQBusinessKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $UseQBusinessKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $BedrockManagedKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateBedrockManagedKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $ShareBedrockManagedKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $UseBedrockManagedKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $BoxKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateBoxKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $ShareBoxKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $UseBoxKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $IDCKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateIDCKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $ShareIDCKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $UseIDCKnowledgeBase
 * @property 'DENY'|'ALLOW'|null $Action
 * @property 'DENY'|'ALLOW'|null $GenericHTTPAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateGenericHTTPAction
 * @property 'DENY'|'ALLOW'|null $ShareGenericHTTPAction
 * @property 'DENY'|'ALLOW'|null $UseGenericHTTPAction
 * @property 'DENY'|'ALLOW'|null $AsanaAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateAsanaAction
 * @property 'DENY'|'ALLOW'|null $ShareAsanaAction
 * @property 'DENY'|'ALLOW'|null $UseAsanaAction
 * @property 'DENY'|'ALLOW'|null $SlackAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateSlackAction
 * @property 'DENY'|'ALLOW'|null $ShareSlackAction
 * @property 'DENY'|'ALLOW'|null $UseSlackAction
 * @property 'DENY'|'ALLOW'|null $ServiceNowAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateServiceNowAction
 * @property 'DENY'|'ALLOW'|null $ShareServiceNowAction
 * @property 'DENY'|'ALLOW'|null $UseServiceNowAction
 * @property 'DENY'|'ALLOW'|null $SalesforceAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateSalesforceAction
 * @property 'DENY'|'ALLOW'|null $ShareSalesforceAction
 * @property 'DENY'|'ALLOW'|null $UseSalesforceAction
 * @property 'DENY'|'ALLOW'|null $MSExchangeAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateMSExchangeAction
 * @property 'DENY'|'ALLOW'|null $ShareMSExchangeAction
 * @property 'DENY'|'ALLOW'|null $UseMSExchangeAction
 * @property 'DENY'|'ALLOW'|null $PagerDutyAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdatePagerDutyAction
 * @property 'DENY'|'ALLOW'|null $SharePagerDutyAction
 * @property 'DENY'|'ALLOW'|null $UsePagerDutyAction
 * @property 'DENY'|'ALLOW'|null $JiraAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateJiraAction
 * @property 'DENY'|'ALLOW'|null $ShareJiraAction
 * @property 'DENY'|'ALLOW'|null $UseJiraAction
 * @property 'DENY'|'ALLOW'|null $ConfluenceAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateConfluenceAction
 * @property 'DENY'|'ALLOW'|null $ShareConfluenceAction
 * @property 'DENY'|'ALLOW'|null $UseConfluenceAction
 * @property 'DENY'|'ALLOW'|null $OneDriveAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateOneDriveAction
 * @property 'DENY'|'ALLOW'|null $ShareOneDriveAction
 * @property 'DENY'|'ALLOW'|null $UseOneDriveAction
 * @property 'DENY'|'ALLOW'|null $SharePointAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateSharePointAction
 * @property 'DENY'|'ALLOW'|null $ShareSharePointAction
 * @property 'DENY'|'ALLOW'|null $UseSharePointAction
 * @property 'DENY'|'ALLOW'|null $MSTeamsAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateMSTeamsAction
 * @property 'DENY'|'ALLOW'|null $ShareMSTeamsAction
 * @property 'DENY'|'ALLOW'|null $UseMSTeamsAction
 * @property 'DENY'|'ALLOW'|null $GoogleCalendarAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateGoogleCalendarAction
 * @property 'DENY'|'ALLOW'|null $ShareGoogleCalendarAction
 * @property 'DENY'|'ALLOW'|null $UseGoogleCalendarAction
 * @property 'DENY'|'ALLOW'|null $ZendeskAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateZendeskAction
 * @property 'DENY'|'ALLOW'|null $ShareZendeskAction
 * @property 'DENY'|'ALLOW'|null $UseZendeskAction
 * @property 'DENY'|'ALLOW'|null $SmartsheetAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateSmartsheetAction
 * @property 'DENY'|'ALLOW'|null $ShareSmartsheetAction
 * @property 'DENY'|'ALLOW'|null $UseSmartsheetAction
 * @property 'DENY'|'ALLOW'|null $SAPBusinessPartnerAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateSAPBusinessPartnerAction
 * @property 'DENY'|'ALLOW'|null $ShareSAPBusinessPartnerAction
 * @property 'DENY'|'ALLOW'|null $UseSAPBusinessPartnerAction
 * @property 'DENY'|'ALLOW'|null $SAPProductMasterDataAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateSAPProductMasterDataAction
 * @property 'DENY'|'ALLOW'|null $ShareSAPProductMasterDataAction
 * @property 'DENY'|'ALLOW'|null $UseSAPProductMasterDataAction
 * @property 'DENY'|'ALLOW'|null $SAPPhysicalInventoryAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateSAPPhysicalInventoryAction
 * @property 'DENY'|'ALLOW'|null $ShareSAPPhysicalInventoryAction
 * @property 'DENY'|'ALLOW'|null $UseSAPPhysicalInventoryAction
 * @property 'DENY'|'ALLOW'|null $SAPBillOfMaterialAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateSAPBillOfMaterialAction
 * @property 'DENY'|'ALLOW'|null $ShareSAPBillOfMaterialAction
 * @property 'DENY'|'ALLOW'|null $UseSAPBillOfMaterialAction
 * @property 'DENY'|'ALLOW'|null $SAPMaterialStockAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateSAPMaterialStockAction
 * @property 'DENY'|'ALLOW'|null $ShareSAPMaterialStockAction
 * @property 'DENY'|'ALLOW'|null $UseSAPMaterialStockAction
 * @property 'DENY'|'ALLOW'|null $FactSetAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateFactSetAction
 * @property 'DENY'|'ALLOW'|null $ShareFactSetAction
 * @property 'DENY'|'ALLOW'|null $UseFactSetAction
 * @property 'DENY'|'ALLOW'|null $AmazonSThreeAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateAmazonSThreeAction
 * @property 'DENY'|'ALLOW'|null $ShareAmazonSThreeAction
 * @property 'DENY'|'ALLOW'|null $UseAmazonSThreeAction
 * @property 'DENY'|'ALLOW'|null $TextractAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateTextractAction
 * @property 'DENY'|'ALLOW'|null $ShareTextractAction
 * @property 'DENY'|'ALLOW'|null $UseTextractAction
 * @property 'DENY'|'ALLOW'|null $ComprehendAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateComprehendAction
 * @property 'DENY'|'ALLOW'|null $ShareComprehendAction
 * @property 'DENY'|'ALLOW'|null $UseComprehendAction
 * @property 'DENY'|'ALLOW'|null $ComprehendMedicalAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateComprehendMedicalAction
 * @property 'DENY'|'ALLOW'|null $ShareComprehendMedicalAction
 * @property 'DENY'|'ALLOW'|null $UseComprehendMedicalAction
 * @property 'DENY'|'ALLOW'|null $AmazonBedrockARSAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateAmazonBedrockARSAction
 * @property 'DENY'|'ALLOW'|null $ShareAmazonBedrockARSAction
 * @property 'DENY'|'ALLOW'|null $UseAmazonBedrockARSAction
 * @property 'DENY'|'ALLOW'|null $AmazonBedrockFSAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateAmazonBedrockFSAction
 * @property 'DENY'|'ALLOW'|null $ShareAmazonBedrockFSAction
 * @property 'DENY'|'ALLOW'|null $UseAmazonBedrockFSAction
 * @property 'DENY'|'ALLOW'|null $AmazonBedrockKRSAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateAmazonBedrockKRSAction
 * @property 'DENY'|'ALLOW'|null $ShareAmazonBedrockKRSAction
 * @property 'DENY'|'ALLOW'|null $UseAmazonBedrockKRSAction
 * @property 'DENY'|'ALLOW'|null $MCPAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateMCPAction
 * @property 'DENY'|'ALLOW'|null $ShareMCPAction
 * @property 'DENY'|'ALLOW'|null $UseMCPAction
 * @property 'DENY'|'ALLOW'|null $OpenAPIAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateOpenAPIAction
 * @property 'DENY'|'ALLOW'|null $ShareOpenAPIAction
 * @property 'DENY'|'ALLOW'|null $UseOpenAPIAction
 * @property 'DENY'|'ALLOW'|null $SandPGMIAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateSandPGMIAction
 * @property 'DENY'|'ALLOW'|null $ShareSandPGMIAction
 * @property 'DENY'|'ALLOW'|null $UseSandPGMIAction
 * @property 'DENY'|'ALLOW'|null $SandPGlobalEnergyAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateSandPGlobalEnergyAction
 * @property 'DENY'|'ALLOW'|null $ShareSandPGlobalEnergyAction
 * @property 'DENY'|'ALLOW'|null $UseSandPGlobalEnergyAction
 * @property 'DENY'|'ALLOW'|null $BambooHRAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateBambooHRAction
 * @property 'DENY'|'ALLOW'|null $ShareBambooHRAction
 * @property 'DENY'|'ALLOW'|null $UseBambooHRAction
 * @property 'DENY'|'ALLOW'|null $BoxAgentAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateBoxAgentAction
 * @property 'DENY'|'ALLOW'|null $ShareBoxAgentAction
 * @property 'DENY'|'ALLOW'|null $UseBoxAgentAction
 * @property 'DENY'|'ALLOW'|null $CanvaAgentAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateCanvaAgentAction
 * @property 'DENY'|'ALLOW'|null $ShareCanvaAgentAction
 * @property 'DENY'|'ALLOW'|null $UseCanvaAgentAction
 * @property 'DENY'|'ALLOW'|null $GithubAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateGithubAction
 * @property 'DENY'|'ALLOW'|null $ShareGithubAction
 * @property 'DENY'|'ALLOW'|null $UseGithubAction
 * @property 'DENY'|'ALLOW'|null $NotionAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateNotionAction
 * @property 'DENY'|'ALLOW'|null $ShareNotionAction
 * @property 'DENY'|'ALLOW'|null $UseNotionAction
 * @property 'DENY'|'ALLOW'|null $LinearAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateLinearAction
 * @property 'DENY'|'ALLOW'|null $ShareLinearAction
 * @property 'DENY'|'ALLOW'|null $UseLinearAction
 * @property 'DENY'|'ALLOW'|null $HuggingFaceAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateHuggingFaceAction
 * @property 'DENY'|'ALLOW'|null $ShareHuggingFaceAction
 * @property 'DENY'|'ALLOW'|null $UseHuggingFaceAction
 * @property 'DENY'|'ALLOW'|null $MondayAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateMondayAction
 * @property 'DENY'|'ALLOW'|null $ShareMondayAction
 * @property 'DENY'|'ALLOW'|null $UseMondayAction
 * @property 'DENY'|'ALLOW'|null $HubspotAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateHubspotAction
 * @property 'DENY'|'ALLOW'|null $ShareHubspotAction
 * @property 'DENY'|'ALLOW'|null $UseHubspotAction
 * @property 'DENY'|'ALLOW'|null $IntercomAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateIntercomAction
 * @property 'DENY'|'ALLOW'|null $ShareIntercomAction
 * @property 'DENY'|'ALLOW'|null $UseIntercomAction
 * @property 'DENY'|'ALLOW'|null $NewRelicAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateNewRelicAction
 * @property 'DENY'|'ALLOW'|null $ShareNewRelicAction
 * @property 'DENY'|'ALLOW'|null $UseNewRelicAction
 * @property 'DENY'|'ALLOW'|null $Topic
 * @property 'DENY'|'ALLOW'|null $EditVisualWithQ
 * @property 'DENY'|'ALLOW'|null $BuildCalculatedFieldWithQ
 * @property 'DENY'|'ALLOW'|null $CreateDashboardExecutiveSummaryWithQ
 * @property 'DENY'|'ALLOW'|null $Space
 * @property 'DENY'|'ALLOW'|null $CreateSpaces
 * @property 'DENY'|'ALLOW'|null $ShareSpaces
 * @property 'DENY'|'ALLOW'|null $ChatAgent
 * @property 'DENY'|'ALLOW'|null $CreateChatAgents
 * @property 'DENY'|'ALLOW'|null $ShareChatAgents
 * @property 'DENY'|'ALLOW'|null $Research
 * @property 'DENY'|'ALLOW'|null $SelfUpgradeUserRole
 * @property 'DENY'|'ALLOW'|null $Extension
 * @property 'DENY'|'ALLOW'|null $UseBrowserExtension
 * @property 'DENY'|'ALLOW'|null $UseWordAddInExtension
 * @property 'DENY'|'ALLOW'|null $UseOutlookAddInExtension
 * @property 'DENY'|'ALLOW'|null $UseExcelAddInExtension
 * @property 'DENY'|'ALLOW'|null $UsePowerpointAddInExtension
 * @property 'DENY'|'ALLOW'|null $ManageSharedFolders
 * @property 'DENY'|'ALLOW'|null $GenerateAnalyses
 * @property 'DENY'|'ALLOW'|null $Story
 * @property 'DENY'|'ALLOW'|null $Scenario
 * @property 'DENY'|'ALLOW'|null $Trigger
 * @property 'DENY'|'ALLOW'|null $ScheduleTrigger
 * @property 'DENY'|'ALLOW'|null $InboundEmailTrigger
 * @property 'DENY'|'ALLOW'|null $QuickEventTrigger
 */
class Capabilities extends Shape
{
    /**
     * @param array{
     *     ExportToCsv?: 'DENY'|'ALLOW'|null,
     *     ExportToExcel?: 'DENY'|'ALLOW'|null,
     *     ExportToPdf?: 'DENY'|'ALLOW'|null,
     *     PrintReports?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateThemes?: 'DENY'|'ALLOW'|null,
     *     AddOrRunAnomalyDetectionForAnalyses?: 'DENY'|'ALLOW'|null,
     *     ShareAnalyses?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateDatasets?: 'DENY'|'ALLOW'|null,
     *     ShareDatasets?: 'DENY'|'ALLOW'|null,
     *     SubscribeDashboardEmailReports?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateDashboardEmailReports?: 'DENY'|'ALLOW'|null,
     *     ShareDashboards?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateThresholdAlerts?: 'DENY'|'ALLOW'|null,
     *     RenameSharedFolders?: 'DENY'|'ALLOW'|null,
     *     CreateSharedFolders?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateDataSources?: 'DENY'|'ALLOW'|null,
     *     ShareDataSources?: 'DENY'|'ALLOW'|null,
     *     ViewAccountSPICECapacity?: 'DENY'|'ALLOW'|null,
     *     CreateSPICEDataset?: 'DENY'|'ALLOW'|null,
     *     ExportToPdfInScheduledReports?: 'DENY'|'ALLOW'|null,
     *     ExportToCsvInScheduledReports?: 'DENY'|'ALLOW'|null,
     *     ExportToExcelInScheduledReports?: 'DENY'|'ALLOW'|null,
     *     IncludeContentInScheduledReportsEmail?: 'DENY'|'ALLOW'|null,
     *     Dashboard?: 'DENY'|'ALLOW'|null,
     *     Analysis?: 'DENY'|'ALLOW'|null,
     *     Automate?: 'DENY'|'ALLOW'|null,
     *     Flow?: 'DENY'|'ALLOW'|null,
     *     Apps?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateApps?: 'DENY'|'ALLOW'|null,
     *     ShareApps?: 'DENY'|'ALLOW'|null,
     *     InvokeAppsAIInference?: 'DENY'|'ALLOW'|null,
     *     AccessAppsNativeDataStore?: 'DENY'|'ALLOW'|null,
     *     PublishWithoutApproval?: 'DENY'|'ALLOW'|null,
     *     UseBedrockModels?: 'DENY'|'ALLOW'|null,
     *     PerformFlowUiTask?: 'DENY'|'ALLOW'|null,
     *     ApproveFlowShareRequests?: 'DENY'|'ALLOW'|null,
     *     UseAgentWebSearch?: 'DENY'|'ALLOW'|null,
     *     KnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateKnowledgeBases?: 'DENY'|'ALLOW'|null,
     *     ShareKnowledgeBases?: 'DENY'|'ALLOW'|null,
     *     SharePointKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateSharePointKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     ShareSharePointKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     UseSharePointKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     GoogleDriveKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateGoogleDriveKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     ShareGoogleDriveKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     UseGoogleDriveKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     WebCrawlerKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateWebCrawlerKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     ShareWebCrawlerKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     UseWebCrawlerKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     S3KnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateS3KnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     ShareS3KnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     UseS3KnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     ConfluenceKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateConfluenceKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     ShareConfluenceKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     UseConfluenceKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     OneDriveKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateOneDriveKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     ShareOneDriveKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     UseOneDriveKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     QBusinessKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateQBusinessKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     ShareQBusinessKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     UseQBusinessKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     BedrockManagedKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateBedrockManagedKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     ShareBedrockManagedKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     UseBedrockManagedKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     BoxKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateBoxKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     ShareBoxKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     UseBoxKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     IDCKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateIDCKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     ShareIDCKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     UseIDCKnowledgeBase?: 'DENY'|'ALLOW'|null,
     *     Action?: 'DENY'|'ALLOW'|null,
     *     GenericHTTPAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateGenericHTTPAction?: 'DENY'|'ALLOW'|null,
     *     ShareGenericHTTPAction?: 'DENY'|'ALLOW'|null,
     *     UseGenericHTTPAction?: 'DENY'|'ALLOW'|null,
     *     AsanaAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateAsanaAction?: 'DENY'|'ALLOW'|null,
     *     ShareAsanaAction?: 'DENY'|'ALLOW'|null,
     *     UseAsanaAction?: 'DENY'|'ALLOW'|null,
     *     SlackAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateSlackAction?: 'DENY'|'ALLOW'|null,
     *     ShareSlackAction?: 'DENY'|'ALLOW'|null,
     *     UseSlackAction?: 'DENY'|'ALLOW'|null,
     *     ServiceNowAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateServiceNowAction?: 'DENY'|'ALLOW'|null,
     *     ShareServiceNowAction?: 'DENY'|'ALLOW'|null,
     *     UseServiceNowAction?: 'DENY'|'ALLOW'|null,
     *     SalesforceAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateSalesforceAction?: 'DENY'|'ALLOW'|null,
     *     ShareSalesforceAction?: 'DENY'|'ALLOW'|null,
     *     UseSalesforceAction?: 'DENY'|'ALLOW'|null,
     *     MSExchangeAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateMSExchangeAction?: 'DENY'|'ALLOW'|null,
     *     ShareMSExchangeAction?: 'DENY'|'ALLOW'|null,
     *     UseMSExchangeAction?: 'DENY'|'ALLOW'|null,
     *     PagerDutyAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdatePagerDutyAction?: 'DENY'|'ALLOW'|null,
     *     SharePagerDutyAction?: 'DENY'|'ALLOW'|null,
     *     UsePagerDutyAction?: 'DENY'|'ALLOW'|null,
     *     JiraAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateJiraAction?: 'DENY'|'ALLOW'|null,
     *     ShareJiraAction?: 'DENY'|'ALLOW'|null,
     *     UseJiraAction?: 'DENY'|'ALLOW'|null,
     *     ConfluenceAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateConfluenceAction?: 'DENY'|'ALLOW'|null,
     *     ShareConfluenceAction?: 'DENY'|'ALLOW'|null,
     *     UseConfluenceAction?: 'DENY'|'ALLOW'|null,
     *     OneDriveAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateOneDriveAction?: 'DENY'|'ALLOW'|null,
     *     ShareOneDriveAction?: 'DENY'|'ALLOW'|null,
     *     UseOneDriveAction?: 'DENY'|'ALLOW'|null,
     *     SharePointAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateSharePointAction?: 'DENY'|'ALLOW'|null,
     *     ShareSharePointAction?: 'DENY'|'ALLOW'|null,
     *     UseSharePointAction?: 'DENY'|'ALLOW'|null,
     *     MSTeamsAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateMSTeamsAction?: 'DENY'|'ALLOW'|null,
     *     ShareMSTeamsAction?: 'DENY'|'ALLOW'|null,
     *     UseMSTeamsAction?: 'DENY'|'ALLOW'|null,
     *     GoogleCalendarAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateGoogleCalendarAction?: 'DENY'|'ALLOW'|null,
     *     ShareGoogleCalendarAction?: 'DENY'|'ALLOW'|null,
     *     UseGoogleCalendarAction?: 'DENY'|'ALLOW'|null,
     *     ZendeskAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateZendeskAction?: 'DENY'|'ALLOW'|null,
     *     ShareZendeskAction?: 'DENY'|'ALLOW'|null,
     *     UseZendeskAction?: 'DENY'|'ALLOW'|null,
     *     SmartsheetAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateSmartsheetAction?: 'DENY'|'ALLOW'|null,
     *     ShareSmartsheetAction?: 'DENY'|'ALLOW'|null,
     *     UseSmartsheetAction?: 'DENY'|'ALLOW'|null,
     *     SAPBusinessPartnerAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateSAPBusinessPartnerAction?: 'DENY'|'ALLOW'|null,
     *     ShareSAPBusinessPartnerAction?: 'DENY'|'ALLOW'|null,
     *     UseSAPBusinessPartnerAction?: 'DENY'|'ALLOW'|null,
     *     SAPProductMasterDataAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateSAPProductMasterDataAction?: 'DENY'|'ALLOW'|null,
     *     ShareSAPProductMasterDataAction?: 'DENY'|'ALLOW'|null,
     *     UseSAPProductMasterDataAction?: 'DENY'|'ALLOW'|null,
     *     SAPPhysicalInventoryAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateSAPPhysicalInventoryAction?: 'DENY'|'ALLOW'|null,
     *     ShareSAPPhysicalInventoryAction?: 'DENY'|'ALLOW'|null,
     *     UseSAPPhysicalInventoryAction?: 'DENY'|'ALLOW'|null,
     *     SAPBillOfMaterialAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateSAPBillOfMaterialAction?: 'DENY'|'ALLOW'|null,
     *     ShareSAPBillOfMaterialAction?: 'DENY'|'ALLOW'|null,
     *     UseSAPBillOfMaterialAction?: 'DENY'|'ALLOW'|null,
     *     SAPMaterialStockAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateSAPMaterialStockAction?: 'DENY'|'ALLOW'|null,
     *     ShareSAPMaterialStockAction?: 'DENY'|'ALLOW'|null,
     *     UseSAPMaterialStockAction?: 'DENY'|'ALLOW'|null,
     *     FactSetAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateFactSetAction?: 'DENY'|'ALLOW'|null,
     *     ShareFactSetAction?: 'DENY'|'ALLOW'|null,
     *     UseFactSetAction?: 'DENY'|'ALLOW'|null,
     *     AmazonSThreeAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateAmazonSThreeAction?: 'DENY'|'ALLOW'|null,
     *     ShareAmazonSThreeAction?: 'DENY'|'ALLOW'|null,
     *     UseAmazonSThreeAction?: 'DENY'|'ALLOW'|null,
     *     TextractAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateTextractAction?: 'DENY'|'ALLOW'|null,
     *     ShareTextractAction?: 'DENY'|'ALLOW'|null,
     *     UseTextractAction?: 'DENY'|'ALLOW'|null,
     *     ComprehendAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateComprehendAction?: 'DENY'|'ALLOW'|null,
     *     ShareComprehendAction?: 'DENY'|'ALLOW'|null,
     *     UseComprehendAction?: 'DENY'|'ALLOW'|null,
     *     ComprehendMedicalAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateComprehendMedicalAction?: 'DENY'|'ALLOW'|null,
     *     ShareComprehendMedicalAction?: 'DENY'|'ALLOW'|null,
     *     UseComprehendMedicalAction?: 'DENY'|'ALLOW'|null,
     *     AmazonBedrockARSAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateAmazonBedrockARSAction?: 'DENY'|'ALLOW'|null,
     *     ShareAmazonBedrockARSAction?: 'DENY'|'ALLOW'|null,
     *     UseAmazonBedrockARSAction?: 'DENY'|'ALLOW'|null,
     *     AmazonBedrockFSAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateAmazonBedrockFSAction?: 'DENY'|'ALLOW'|null,
     *     ShareAmazonBedrockFSAction?: 'DENY'|'ALLOW'|null,
     *     UseAmazonBedrockFSAction?: 'DENY'|'ALLOW'|null,
     *     AmazonBedrockKRSAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateAmazonBedrockKRSAction?: 'DENY'|'ALLOW'|null,
     *     ShareAmazonBedrockKRSAction?: 'DENY'|'ALLOW'|null,
     *     UseAmazonBedrockKRSAction?: 'DENY'|'ALLOW'|null,
     *     MCPAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateMCPAction?: 'DENY'|'ALLOW'|null,
     *     ShareMCPAction?: 'DENY'|'ALLOW'|null,
     *     UseMCPAction?: 'DENY'|'ALLOW'|null,
     *     OpenAPIAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateOpenAPIAction?: 'DENY'|'ALLOW'|null,
     *     ShareOpenAPIAction?: 'DENY'|'ALLOW'|null,
     *     UseOpenAPIAction?: 'DENY'|'ALLOW'|null,
     *     SandPGMIAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateSandPGMIAction?: 'DENY'|'ALLOW'|null,
     *     ShareSandPGMIAction?: 'DENY'|'ALLOW'|null,
     *     UseSandPGMIAction?: 'DENY'|'ALLOW'|null,
     *     SandPGlobalEnergyAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateSandPGlobalEnergyAction?: 'DENY'|'ALLOW'|null,
     *     ShareSandPGlobalEnergyAction?: 'DENY'|'ALLOW'|null,
     *     UseSandPGlobalEnergyAction?: 'DENY'|'ALLOW'|null,
     *     BambooHRAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateBambooHRAction?: 'DENY'|'ALLOW'|null,
     *     ShareBambooHRAction?: 'DENY'|'ALLOW'|null,
     *     UseBambooHRAction?: 'DENY'|'ALLOW'|null,
     *     BoxAgentAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateBoxAgentAction?: 'DENY'|'ALLOW'|null,
     *     ShareBoxAgentAction?: 'DENY'|'ALLOW'|null,
     *     UseBoxAgentAction?: 'DENY'|'ALLOW'|null,
     *     CanvaAgentAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateCanvaAgentAction?: 'DENY'|'ALLOW'|null,
     *     ShareCanvaAgentAction?: 'DENY'|'ALLOW'|null,
     *     UseCanvaAgentAction?: 'DENY'|'ALLOW'|null,
     *     GithubAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateGithubAction?: 'DENY'|'ALLOW'|null,
     *     ShareGithubAction?: 'DENY'|'ALLOW'|null,
     *     UseGithubAction?: 'DENY'|'ALLOW'|null,
     *     NotionAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateNotionAction?: 'DENY'|'ALLOW'|null,
     *     ShareNotionAction?: 'DENY'|'ALLOW'|null,
     *     UseNotionAction?: 'DENY'|'ALLOW'|null,
     *     LinearAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateLinearAction?: 'DENY'|'ALLOW'|null,
     *     ShareLinearAction?: 'DENY'|'ALLOW'|null,
     *     UseLinearAction?: 'DENY'|'ALLOW'|null,
     *     HuggingFaceAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateHuggingFaceAction?: 'DENY'|'ALLOW'|null,
     *     ShareHuggingFaceAction?: 'DENY'|'ALLOW'|null,
     *     UseHuggingFaceAction?: 'DENY'|'ALLOW'|null,
     *     MondayAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateMondayAction?: 'DENY'|'ALLOW'|null,
     *     ShareMondayAction?: 'DENY'|'ALLOW'|null,
     *     UseMondayAction?: 'DENY'|'ALLOW'|null,
     *     HubspotAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateHubspotAction?: 'DENY'|'ALLOW'|null,
     *     ShareHubspotAction?: 'DENY'|'ALLOW'|null,
     *     UseHubspotAction?: 'DENY'|'ALLOW'|null,
     *     IntercomAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateIntercomAction?: 'DENY'|'ALLOW'|null,
     *     ShareIntercomAction?: 'DENY'|'ALLOW'|null,
     *     UseIntercomAction?: 'DENY'|'ALLOW'|null,
     *     NewRelicAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateNewRelicAction?: 'DENY'|'ALLOW'|null,
     *     ShareNewRelicAction?: 'DENY'|'ALLOW'|null,
     *     UseNewRelicAction?: 'DENY'|'ALLOW'|null,
     *     Topic?: 'DENY'|'ALLOW'|null,
     *     EditVisualWithQ?: 'DENY'|'ALLOW'|null,
     *     BuildCalculatedFieldWithQ?: 'DENY'|'ALLOW'|null,
     *     CreateDashboardExecutiveSummaryWithQ?: 'DENY'|'ALLOW'|null,
     *     Space?: 'DENY'|'ALLOW'|null,
     *     CreateSpaces?: 'DENY'|'ALLOW'|null,
     *     ShareSpaces?: 'DENY'|'ALLOW'|null,
     *     ChatAgent?: 'DENY'|'ALLOW'|null,
     *     CreateChatAgents?: 'DENY'|'ALLOW'|null,
     *     ShareChatAgents?: 'DENY'|'ALLOW'|null,
     *     Research?: 'DENY'|'ALLOW'|null,
     *     SelfUpgradeUserRole?: 'DENY'|'ALLOW'|null,
     *     Extension?: 'DENY'|'ALLOW'|null,
     *     UseBrowserExtension?: 'DENY'|'ALLOW'|null,
     *     UseWordAddInExtension?: 'DENY'|'ALLOW'|null,
     *     UseOutlookAddInExtension?: 'DENY'|'ALLOW'|null,
     *     UseExcelAddInExtension?: 'DENY'|'ALLOW'|null,
     *     UsePowerpointAddInExtension?: 'DENY'|'ALLOW'|null,
     *     ManageSharedFolders?: 'DENY'|'ALLOW'|null,
     *     GenerateAnalyses?: 'DENY'|'ALLOW'|null,
     *     Story?: 'DENY'|'ALLOW'|null,
     *     Scenario?: 'DENY'|'ALLOW'|null,
     *     Trigger?: 'DENY'|'ALLOW'|null,
     *     ScheduleTrigger?: 'DENY'|'ALLOW'|null,
     *     InboundEmailTrigger?: 'DENY'|'ALLOW'|null,
     *     QuickEventTrigger?: 'DENY'|'ALLOW'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
