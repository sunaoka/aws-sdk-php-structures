<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateCustomPermissions\Shapes;

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
 * @property 'DENY'|null $GenericHTTPAction
 * @property 'DENY'|null $CreateAndUpdateGenericHTTPAction
 * @property 'DENY'|null $ShareGenericHTTPAction
 * @property 'DENY'|null $UseGenericHTTPAction
 * @property 'DENY'|null $AsanaAction
 * @property 'DENY'|null $CreateAndUpdateAsanaAction
 * @property 'DENY'|null $ShareAsanaAction
 * @property 'DENY'|null $UseAsanaAction
 * @property 'DENY'|null $SlackAction
 * @property 'DENY'|null $CreateAndUpdateSlackAction
 * @property 'DENY'|null $ShareSlackAction
 * @property 'DENY'|null $UseSlackAction
 * @property 'DENY'|null $ServiceNowAction
 * @property 'DENY'|null $CreateAndUpdateServiceNowAction
 * @property 'DENY'|null $ShareServiceNowAction
 * @property 'DENY'|null $UseServiceNowAction
 * @property 'DENY'|null $SalesforceAction
 * @property 'DENY'|null $CreateAndUpdateSalesforceAction
 * @property 'DENY'|null $ShareSalesforceAction
 * @property 'DENY'|null $UseSalesforceAction
 * @property 'DENY'|null $MSExchangeAction
 * @property 'DENY'|null $CreateAndUpdateMSExchangeAction
 * @property 'DENY'|null $ShareMSExchangeAction
 * @property 'DENY'|null $UseMSExchangeAction
 * @property 'DENY'|null $PagerDutyAction
 * @property 'DENY'|null $CreateAndUpdatePagerDutyAction
 * @property 'DENY'|null $SharePagerDutyAction
 * @property 'DENY'|null $UsePagerDutyAction
 * @property 'DENY'|null $JiraAction
 * @property 'DENY'|null $CreateAndUpdateJiraAction
 * @property 'DENY'|null $ShareJiraAction
 * @property 'DENY'|null $UseJiraAction
 * @property 'DENY'|null $ConfluenceAction
 * @property 'DENY'|null $CreateAndUpdateConfluenceAction
 * @property 'DENY'|null $ShareConfluenceAction
 * @property 'DENY'|null $UseConfluenceAction
 * @property 'DENY'|null $OneDriveAction
 * @property 'DENY'|null $CreateAndUpdateOneDriveAction
 * @property 'DENY'|null $ShareOneDriveAction
 * @property 'DENY'|null $UseOneDriveAction
 * @property 'DENY'|null $SharePointAction
 * @property 'DENY'|null $CreateAndUpdateSharePointAction
 * @property 'DENY'|null $ShareSharePointAction
 * @property 'DENY'|null $UseSharePointAction
 * @property 'DENY'|null $MSTeamsAction
 * @property 'DENY'|null $CreateAndUpdateMSTeamsAction
 * @property 'DENY'|null $ShareMSTeamsAction
 * @property 'DENY'|null $UseMSTeamsAction
 * @property 'DENY'|null $GoogleCalendarAction
 * @property 'DENY'|null $CreateAndUpdateGoogleCalendarAction
 * @property 'DENY'|null $ShareGoogleCalendarAction
 * @property 'DENY'|null $UseGoogleCalendarAction
 * @property 'DENY'|null $ZendeskAction
 * @property 'DENY'|null $CreateAndUpdateZendeskAction
 * @property 'DENY'|null $ShareZendeskAction
 * @property 'DENY'|null $UseZendeskAction
 * @property 'DENY'|null $SmartsheetAction
 * @property 'DENY'|null $CreateAndUpdateSmartsheetAction
 * @property 'DENY'|null $ShareSmartsheetAction
 * @property 'DENY'|null $UseSmartsheetAction
 * @property 'DENY'|null $SAPBusinessPartnerAction
 * @property 'DENY'|null $CreateAndUpdateSAPBusinessPartnerAction
 * @property 'DENY'|null $ShareSAPBusinessPartnerAction
 * @property 'DENY'|null $UseSAPBusinessPartnerAction
 * @property 'DENY'|null $SAPProductMasterDataAction
 * @property 'DENY'|null $CreateAndUpdateSAPProductMasterDataAction
 * @property 'DENY'|null $ShareSAPProductMasterDataAction
 * @property 'DENY'|null $UseSAPProductMasterDataAction
 * @property 'DENY'|null $SAPPhysicalInventoryAction
 * @property 'DENY'|null $CreateAndUpdateSAPPhysicalInventoryAction
 * @property 'DENY'|null $ShareSAPPhysicalInventoryAction
 * @property 'DENY'|null $UseSAPPhysicalInventoryAction
 * @property 'DENY'|null $SAPBillOfMaterialAction
 * @property 'DENY'|null $CreateAndUpdateSAPBillOfMaterialAction
 * @property 'DENY'|null $ShareSAPBillOfMaterialAction
 * @property 'DENY'|null $UseSAPBillOfMaterialAction
 * @property 'DENY'|null $SAPMaterialStockAction
 * @property 'DENY'|null $CreateAndUpdateSAPMaterialStockAction
 * @property 'DENY'|null $ShareSAPMaterialStockAction
 * @property 'DENY'|null $UseSAPMaterialStockAction
 * @property 'DENY'|null $FactSetAction
 * @property 'DENY'|null $CreateAndUpdateFactSetAction
 * @property 'DENY'|null $ShareFactSetAction
 * @property 'DENY'|null $UseFactSetAction
 * @property 'DENY'|null $AmazonSThreeAction
 * @property 'DENY'|null $CreateAndUpdateAmazonSThreeAction
 * @property 'DENY'|null $ShareAmazonSThreeAction
 * @property 'DENY'|null $UseAmazonSThreeAction
 * @property 'DENY'|null $TextractAction
 * @property 'DENY'|null $CreateAndUpdateTextractAction
 * @property 'DENY'|null $ShareTextractAction
 * @property 'DENY'|null $UseTextractAction
 * @property 'DENY'|null $ComprehendAction
 * @property 'DENY'|null $CreateAndUpdateComprehendAction
 * @property 'DENY'|null $ShareComprehendAction
 * @property 'DENY'|null $UseComprehendAction
 * @property 'DENY'|null $ComprehendMedicalAction
 * @property 'DENY'|null $CreateAndUpdateComprehendMedicalAction
 * @property 'DENY'|null $ShareComprehendMedicalAction
 * @property 'DENY'|null $UseComprehendMedicalAction
 * @property 'DENY'|null $AmazonBedrockARSAction
 * @property 'DENY'|null $CreateAndUpdateAmazonBedrockARSAction
 * @property 'DENY'|null $ShareAmazonBedrockARSAction
 * @property 'DENY'|null $UseAmazonBedrockARSAction
 * @property 'DENY'|null $AmazonBedrockFSAction
 * @property 'DENY'|null $CreateAndUpdateAmazonBedrockFSAction
 * @property 'DENY'|null $ShareAmazonBedrockFSAction
 * @property 'DENY'|null $UseAmazonBedrockFSAction
 * @property 'DENY'|null $AmazonBedrockKRSAction
 * @property 'DENY'|null $CreateAndUpdateAmazonBedrockKRSAction
 * @property 'DENY'|null $ShareAmazonBedrockKRSAction
 * @property 'DENY'|null $UseAmazonBedrockKRSAction
 * @property 'DENY'|null $MCPAction
 * @property 'DENY'|null $CreateAndUpdateMCPAction
 * @property 'DENY'|null $ShareMCPAction
 * @property 'DENY'|null $UseMCPAction
 * @property 'DENY'|null $OpenAPIAction
 * @property 'DENY'|null $CreateAndUpdateOpenAPIAction
 * @property 'DENY'|null $ShareOpenAPIAction
 * @property 'DENY'|null $UseOpenAPIAction
 * @property 'DENY'|null $SandPGMIAction
 * @property 'DENY'|null $CreateAndUpdateSandPGMIAction
 * @property 'DENY'|null $ShareSandPGMIAction
 * @property 'DENY'|null $UseSandPGMIAction
 * @property 'DENY'|null $SandPGlobalEnergyAction
 * @property 'DENY'|null $CreateAndUpdateSandPGlobalEnergyAction
 * @property 'DENY'|null $ShareSandPGlobalEnergyAction
 * @property 'DENY'|null $UseSandPGlobalEnergyAction
 * @property 'DENY'|null $BambooHRAction
 * @property 'DENY'|null $CreateAndUpdateBambooHRAction
 * @property 'DENY'|null $ShareBambooHRAction
 * @property 'DENY'|null $UseBambooHRAction
 * @property 'DENY'|null $BoxAgentAction
 * @property 'DENY'|null $CreateAndUpdateBoxAgentAction
 * @property 'DENY'|null $ShareBoxAgentAction
 * @property 'DENY'|null $UseBoxAgentAction
 * @property 'DENY'|null $CanvaAgentAction
 * @property 'DENY'|null $CreateAndUpdateCanvaAgentAction
 * @property 'DENY'|null $ShareCanvaAgentAction
 * @property 'DENY'|null $UseCanvaAgentAction
 * @property 'DENY'|null $GithubAction
 * @property 'DENY'|null $CreateAndUpdateGithubAction
 * @property 'DENY'|null $ShareGithubAction
 * @property 'DENY'|null $UseGithubAction
 * @property 'DENY'|null $NotionAction
 * @property 'DENY'|null $CreateAndUpdateNotionAction
 * @property 'DENY'|null $ShareNotionAction
 * @property 'DENY'|null $UseNotionAction
 * @property 'DENY'|null $LinearAction
 * @property 'DENY'|null $CreateAndUpdateLinearAction
 * @property 'DENY'|null $ShareLinearAction
 * @property 'DENY'|null $UseLinearAction
 * @property 'DENY'|null $HuggingFaceAction
 * @property 'DENY'|null $CreateAndUpdateHuggingFaceAction
 * @property 'DENY'|null $ShareHuggingFaceAction
 * @property 'DENY'|null $UseHuggingFaceAction
 * @property 'DENY'|null $MondayAction
 * @property 'DENY'|null $CreateAndUpdateMondayAction
 * @property 'DENY'|null $ShareMondayAction
 * @property 'DENY'|null $UseMondayAction
 * @property 'DENY'|null $HubspotAction
 * @property 'DENY'|null $CreateAndUpdateHubspotAction
 * @property 'DENY'|null $ShareHubspotAction
 * @property 'DENY'|null $UseHubspotAction
 * @property 'DENY'|null $IntercomAction
 * @property 'DENY'|null $CreateAndUpdateIntercomAction
 * @property 'DENY'|null $ShareIntercomAction
 * @property 'DENY'|null $UseIntercomAction
 * @property 'DENY'|null $NewRelicAction
 * @property 'DENY'|null $CreateAndUpdateNewRelicAction
 * @property 'DENY'|null $ShareNewRelicAction
 * @property 'DENY'|null $UseNewRelicAction
 * @property 'DENY'|null $Space
 * @property 'DENY'|null $ChatAgent
 * @property 'DENY'|null $CreateChatAgents
 * @property 'DENY'|null $Research
 * @property 'DENY'|null $SelfUpgradeUserRole
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
     *     GenericHTTPAction?: 'DENY'|null,
     *     CreateAndUpdateGenericHTTPAction?: 'DENY'|null,
     *     ShareGenericHTTPAction?: 'DENY'|null,
     *     UseGenericHTTPAction?: 'DENY'|null,
     *     AsanaAction?: 'DENY'|null,
     *     CreateAndUpdateAsanaAction?: 'DENY'|null,
     *     ShareAsanaAction?: 'DENY'|null,
     *     UseAsanaAction?: 'DENY'|null,
     *     SlackAction?: 'DENY'|null,
     *     CreateAndUpdateSlackAction?: 'DENY'|null,
     *     ShareSlackAction?: 'DENY'|null,
     *     UseSlackAction?: 'DENY'|null,
     *     ServiceNowAction?: 'DENY'|null,
     *     CreateAndUpdateServiceNowAction?: 'DENY'|null,
     *     ShareServiceNowAction?: 'DENY'|null,
     *     UseServiceNowAction?: 'DENY'|null,
     *     SalesforceAction?: 'DENY'|null,
     *     CreateAndUpdateSalesforceAction?: 'DENY'|null,
     *     ShareSalesforceAction?: 'DENY'|null,
     *     UseSalesforceAction?: 'DENY'|null,
     *     MSExchangeAction?: 'DENY'|null,
     *     CreateAndUpdateMSExchangeAction?: 'DENY'|null,
     *     ShareMSExchangeAction?: 'DENY'|null,
     *     UseMSExchangeAction?: 'DENY'|null,
     *     PagerDutyAction?: 'DENY'|null,
     *     CreateAndUpdatePagerDutyAction?: 'DENY'|null,
     *     SharePagerDutyAction?: 'DENY'|null,
     *     UsePagerDutyAction?: 'DENY'|null,
     *     JiraAction?: 'DENY'|null,
     *     CreateAndUpdateJiraAction?: 'DENY'|null,
     *     ShareJiraAction?: 'DENY'|null,
     *     UseJiraAction?: 'DENY'|null,
     *     ConfluenceAction?: 'DENY'|null,
     *     CreateAndUpdateConfluenceAction?: 'DENY'|null,
     *     ShareConfluenceAction?: 'DENY'|null,
     *     UseConfluenceAction?: 'DENY'|null,
     *     OneDriveAction?: 'DENY'|null,
     *     CreateAndUpdateOneDriveAction?: 'DENY'|null,
     *     ShareOneDriveAction?: 'DENY'|null,
     *     UseOneDriveAction?: 'DENY'|null,
     *     SharePointAction?: 'DENY'|null,
     *     CreateAndUpdateSharePointAction?: 'DENY'|null,
     *     ShareSharePointAction?: 'DENY'|null,
     *     UseSharePointAction?: 'DENY'|null,
     *     MSTeamsAction?: 'DENY'|null,
     *     CreateAndUpdateMSTeamsAction?: 'DENY'|null,
     *     ShareMSTeamsAction?: 'DENY'|null,
     *     UseMSTeamsAction?: 'DENY'|null,
     *     GoogleCalendarAction?: 'DENY'|null,
     *     CreateAndUpdateGoogleCalendarAction?: 'DENY'|null,
     *     ShareGoogleCalendarAction?: 'DENY'|null,
     *     UseGoogleCalendarAction?: 'DENY'|null,
     *     ZendeskAction?: 'DENY'|null,
     *     CreateAndUpdateZendeskAction?: 'DENY'|null,
     *     ShareZendeskAction?: 'DENY'|null,
     *     UseZendeskAction?: 'DENY'|null,
     *     SmartsheetAction?: 'DENY'|null,
     *     CreateAndUpdateSmartsheetAction?: 'DENY'|null,
     *     ShareSmartsheetAction?: 'DENY'|null,
     *     UseSmartsheetAction?: 'DENY'|null,
     *     SAPBusinessPartnerAction?: 'DENY'|null,
     *     CreateAndUpdateSAPBusinessPartnerAction?: 'DENY'|null,
     *     ShareSAPBusinessPartnerAction?: 'DENY'|null,
     *     UseSAPBusinessPartnerAction?: 'DENY'|null,
     *     SAPProductMasterDataAction?: 'DENY'|null,
     *     CreateAndUpdateSAPProductMasterDataAction?: 'DENY'|null,
     *     ShareSAPProductMasterDataAction?: 'DENY'|null,
     *     UseSAPProductMasterDataAction?: 'DENY'|null,
     *     SAPPhysicalInventoryAction?: 'DENY'|null,
     *     CreateAndUpdateSAPPhysicalInventoryAction?: 'DENY'|null,
     *     ShareSAPPhysicalInventoryAction?: 'DENY'|null,
     *     UseSAPPhysicalInventoryAction?: 'DENY'|null,
     *     SAPBillOfMaterialAction?: 'DENY'|null,
     *     CreateAndUpdateSAPBillOfMaterialAction?: 'DENY'|null,
     *     ShareSAPBillOfMaterialAction?: 'DENY'|null,
     *     UseSAPBillOfMaterialAction?: 'DENY'|null,
     *     SAPMaterialStockAction?: 'DENY'|null,
     *     CreateAndUpdateSAPMaterialStockAction?: 'DENY'|null,
     *     ShareSAPMaterialStockAction?: 'DENY'|null,
     *     UseSAPMaterialStockAction?: 'DENY'|null,
     *     FactSetAction?: 'DENY'|null,
     *     CreateAndUpdateFactSetAction?: 'DENY'|null,
     *     ShareFactSetAction?: 'DENY'|null,
     *     UseFactSetAction?: 'DENY'|null,
     *     AmazonSThreeAction?: 'DENY'|null,
     *     CreateAndUpdateAmazonSThreeAction?: 'DENY'|null,
     *     ShareAmazonSThreeAction?: 'DENY'|null,
     *     UseAmazonSThreeAction?: 'DENY'|null,
     *     TextractAction?: 'DENY'|null,
     *     CreateAndUpdateTextractAction?: 'DENY'|null,
     *     ShareTextractAction?: 'DENY'|null,
     *     UseTextractAction?: 'DENY'|null,
     *     ComprehendAction?: 'DENY'|null,
     *     CreateAndUpdateComprehendAction?: 'DENY'|null,
     *     ShareComprehendAction?: 'DENY'|null,
     *     UseComprehendAction?: 'DENY'|null,
     *     ComprehendMedicalAction?: 'DENY'|null,
     *     CreateAndUpdateComprehendMedicalAction?: 'DENY'|null,
     *     ShareComprehendMedicalAction?: 'DENY'|null,
     *     UseComprehendMedicalAction?: 'DENY'|null,
     *     AmazonBedrockARSAction?: 'DENY'|null,
     *     CreateAndUpdateAmazonBedrockARSAction?: 'DENY'|null,
     *     ShareAmazonBedrockARSAction?: 'DENY'|null,
     *     UseAmazonBedrockARSAction?: 'DENY'|null,
     *     AmazonBedrockFSAction?: 'DENY'|null,
     *     CreateAndUpdateAmazonBedrockFSAction?: 'DENY'|null,
     *     ShareAmazonBedrockFSAction?: 'DENY'|null,
     *     UseAmazonBedrockFSAction?: 'DENY'|null,
     *     AmazonBedrockKRSAction?: 'DENY'|null,
     *     CreateAndUpdateAmazonBedrockKRSAction?: 'DENY'|null,
     *     ShareAmazonBedrockKRSAction?: 'DENY'|null,
     *     UseAmazonBedrockKRSAction?: 'DENY'|null,
     *     MCPAction?: 'DENY'|null,
     *     CreateAndUpdateMCPAction?: 'DENY'|null,
     *     ShareMCPAction?: 'DENY'|null,
     *     UseMCPAction?: 'DENY'|null,
     *     OpenAPIAction?: 'DENY'|null,
     *     CreateAndUpdateOpenAPIAction?: 'DENY'|null,
     *     ShareOpenAPIAction?: 'DENY'|null,
     *     UseOpenAPIAction?: 'DENY'|null,
     *     SandPGMIAction?: 'DENY'|null,
     *     CreateAndUpdateSandPGMIAction?: 'DENY'|null,
     *     ShareSandPGMIAction?: 'DENY'|null,
     *     UseSandPGMIAction?: 'DENY'|null,
     *     SandPGlobalEnergyAction?: 'DENY'|null,
     *     CreateAndUpdateSandPGlobalEnergyAction?: 'DENY'|null,
     *     ShareSandPGlobalEnergyAction?: 'DENY'|null,
     *     UseSandPGlobalEnergyAction?: 'DENY'|null,
     *     BambooHRAction?: 'DENY'|null,
     *     CreateAndUpdateBambooHRAction?: 'DENY'|null,
     *     ShareBambooHRAction?: 'DENY'|null,
     *     UseBambooHRAction?: 'DENY'|null,
     *     BoxAgentAction?: 'DENY'|null,
     *     CreateAndUpdateBoxAgentAction?: 'DENY'|null,
     *     ShareBoxAgentAction?: 'DENY'|null,
     *     UseBoxAgentAction?: 'DENY'|null,
     *     CanvaAgentAction?: 'DENY'|null,
     *     CreateAndUpdateCanvaAgentAction?: 'DENY'|null,
     *     ShareCanvaAgentAction?: 'DENY'|null,
     *     UseCanvaAgentAction?: 'DENY'|null,
     *     GithubAction?: 'DENY'|null,
     *     CreateAndUpdateGithubAction?: 'DENY'|null,
     *     ShareGithubAction?: 'DENY'|null,
     *     UseGithubAction?: 'DENY'|null,
     *     NotionAction?: 'DENY'|null,
     *     CreateAndUpdateNotionAction?: 'DENY'|null,
     *     ShareNotionAction?: 'DENY'|null,
     *     UseNotionAction?: 'DENY'|null,
     *     LinearAction?: 'DENY'|null,
     *     CreateAndUpdateLinearAction?: 'DENY'|null,
     *     ShareLinearAction?: 'DENY'|null,
     *     UseLinearAction?: 'DENY'|null,
     *     HuggingFaceAction?: 'DENY'|null,
     *     CreateAndUpdateHuggingFaceAction?: 'DENY'|null,
     *     ShareHuggingFaceAction?: 'DENY'|null,
     *     UseHuggingFaceAction?: 'DENY'|null,
     *     MondayAction?: 'DENY'|null,
     *     CreateAndUpdateMondayAction?: 'DENY'|null,
     *     ShareMondayAction?: 'DENY'|null,
     *     UseMondayAction?: 'DENY'|null,
     *     HubspotAction?: 'DENY'|null,
     *     CreateAndUpdateHubspotAction?: 'DENY'|null,
     *     ShareHubspotAction?: 'DENY'|null,
     *     UseHubspotAction?: 'DENY'|null,
     *     IntercomAction?: 'DENY'|null,
     *     CreateAndUpdateIntercomAction?: 'DENY'|null,
     *     ShareIntercomAction?: 'DENY'|null,
     *     UseIntercomAction?: 'DENY'|null,
     *     NewRelicAction?: 'DENY'|null,
     *     CreateAndUpdateNewRelicAction?: 'DENY'|null,
     *     ShareNewRelicAction?: 'DENY'|null,
     *     UseNewRelicAction?: 'DENY'|null,
     *     Space?: 'DENY'|null,
     *     ChatAgent?: 'DENY'|null,
     *     CreateChatAgents?: 'DENY'|null,
     *     Research?: 'DENY'|null,
     *     SelfUpgradeUserRole?: 'DENY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
