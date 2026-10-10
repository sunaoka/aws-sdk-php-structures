<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateCustomPermissions\Shapes;

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
 * @property 'DENY'|'ALLOW'|null $PagerDutyAgentAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdatePagerDutyAgentAction
 * @property 'DENY'|'ALLOW'|null $SharePagerDutyAgentAction
 * @property 'DENY'|'ALLOW'|null $UsePagerDutyAgentAction
 * @property 'DENY'|'ALLOW'|null $VisierAgentAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateVisierAgentAction
 * @property 'DENY'|'ALLOW'|null $ShareVisierAgentAction
 * @property 'DENY'|'ALLOW'|null $UseVisierAgentAction
 * @property 'DENY'|'ALLOW'|null $ZoomAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateZoomAction
 * @property 'DENY'|'ALLOW'|null $ShareZoomAction
 * @property 'DENY'|'ALLOW'|null $UseZoomAction
 * @property 'DENY'|'ALLOW'|null $SnowFlakeAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateSnowFlakeAction
 * @property 'DENY'|'ALLOW'|null $ShareSnowFlakeAction
 * @property 'DENY'|'ALLOW'|null $UseSnowFlakeAction
 * @property 'DENY'|'ALLOW'|null $ZapierAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateZapierAction
 * @property 'DENY'|'ALLOW'|null $ShareZapierAction
 * @property 'DENY'|'ALLOW'|null $UseZapierAction
 * @property 'DENY'|'ALLOW'|null $AirtableAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateAirtableAction
 * @property 'DENY'|'ALLOW'|null $ShareAirtableAction
 * @property 'DENY'|'ALLOW'|null $UseAirtableAction
 * @property 'DENY'|'ALLOW'|null $DropboxAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateDropboxAction
 * @property 'DENY'|'ALLOW'|null $ShareDropboxAction
 * @property 'DENY'|'ALLOW'|null $UseDropboxAction
 * @property 'DENY'|'ALLOW'|null $GmailAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateGmailAction
 * @property 'DENY'|'ALLOW'|null $ShareGmailAction
 * @property 'DENY'|'ALLOW'|null $UseGmailAction
 * @property 'DENY'|'ALLOW'|null $GoogleAnalyticsAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateGoogleAnalyticsAction
 * @property 'DENY'|'ALLOW'|null $ShareGoogleAnalyticsAction
 * @property 'DENY'|'ALLOW'|null $UseGoogleAnalyticsAction
 * @property 'DENY'|'ALLOW'|null $GoogleDocsAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateGoogleDocsAction
 * @property 'DENY'|'ALLOW'|null $ShareGoogleDocsAction
 * @property 'DENY'|'ALLOW'|null $UseGoogleDocsAction
 * @property 'DENY'|'ALLOW'|null $GoogleDriveAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateGoogleDriveAction
 * @property 'DENY'|'ALLOW'|null $ShareGoogleDriveAction
 * @property 'DENY'|'ALLOW'|null $UseGoogleDriveAction
 * @property 'DENY'|'ALLOW'|null $GoogleMeetAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateGoogleMeetAction
 * @property 'DENY'|'ALLOW'|null $ShareGoogleMeetAction
 * @property 'DENY'|'ALLOW'|null $UseGoogleMeetAction
 * @property 'DENY'|'ALLOW'|null $GoogleSheetsAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateGoogleSheetsAction
 * @property 'DENY'|'ALLOW'|null $ShareGoogleSheetsAction
 * @property 'DENY'|'ALLOW'|null $UseGoogleSheetsAction
 * @property 'DENY'|'ALLOW'|null $GoogleSlidesAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateGoogleSlidesAction
 * @property 'DENY'|'ALLOW'|null $ShareGoogleSlidesAction
 * @property 'DENY'|'ALLOW'|null $UseGoogleSlidesAction
 * @property 'DENY'|'ALLOW'|null $QuickBooksAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateQuickBooksAction
 * @property 'DENY'|'ALLOW'|null $ShareQuickBooksAction
 * @property 'DENY'|'ALLOW'|null $UseQuickBooksAction
 * @property 'DENY'|'ALLOW'|null $FigmaAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateFigmaAction
 * @property 'DENY'|'ALLOW'|null $ShareFigmaAction
 * @property 'DENY'|'ALLOW'|null $UseFigmaAction
 * @property 'DENY'|'ALLOW'|null $WhatsAppAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateWhatsAppAction
 * @property 'DENY'|'ALLOW'|null $ShareWhatsAppAction
 * @property 'DENY'|'ALLOW'|null $UseWhatsAppAction
 * @property 'DENY'|'ALLOW'|null $GoogleChatAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateGoogleChatAction
 * @property 'DENY'|'ALLOW'|null $ShareGoogleChatAction
 * @property 'DENY'|'ALLOW'|null $UseGoogleChatAction
 * @property 'DENY'|'ALLOW'|null $OneNoteAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateOneNoteAction
 * @property 'DENY'|'ALLOW'|null $ShareOneNoteAction
 * @property 'DENY'|'ALLOW'|null $UseOneNoteAction
 * @property 'DENY'|'ALLOW'|null $ShopifyAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateShopifyAction
 * @property 'DENY'|'ALLOW'|null $ShareShopifyAction
 * @property 'DENY'|'ALLOW'|null $UseShopifyAction
 * @property 'DENY'|'ALLOW'|null $AdobeAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateAdobeAction
 * @property 'DENY'|'ALLOW'|null $ShareAdobeAction
 * @property 'DENY'|'ALLOW'|null $UseAdobeAction
 * @property 'DENY'|'ALLOW'|null $CiscoWebexVidcastAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateCiscoWebexVidcastAction
 * @property 'DENY'|'ALLOW'|null $ShareCiscoWebexVidcastAction
 * @property 'DENY'|'ALLOW'|null $UseCiscoWebexVidcastAction
 * @property 'DENY'|'ALLOW'|null $CiscoWebexMeetingsAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateCiscoWebexMeetingsAction
 * @property 'DENY'|'ALLOW'|null $ShareCiscoWebexMeetingsAction
 * @property 'DENY'|'ALLOW'|null $UseCiscoWebexMeetingsAction
 * @property 'DENY'|'ALLOW'|null $DunAndBradstreetAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateDunAndBradstreetAction
 * @property 'DENY'|'ALLOW'|null $ShareDunAndBradstreetAction
 * @property 'DENY'|'ALLOW'|null $UseDunAndBradstreetAction
 * @property 'DENY'|'ALLOW'|null $HGInsightsAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateHGInsightsAction
 * @property 'DENY'|'ALLOW'|null $ShareHGInsightsAction
 * @property 'DENY'|'ALLOW'|null $UseHGInsightsAction
 * @property 'DENY'|'ALLOW'|null $ZoomInfoAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateZoomInfoAction
 * @property 'DENY'|'ALLOW'|null $ShareZoomInfoAction
 * @property 'DENY'|'ALLOW'|null $UseZoomInfoAction
 * @property 'DENY'|'ALLOW'|null $MoodysAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateMoodysAction
 * @property 'DENY'|'ALLOW'|null $ShareMoodysAction
 * @property 'DENY'|'ALLOW'|null $UseMoodysAction
 * @property 'DENY'|'ALLOW'|null $BeeAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateBeeAction
 * @property 'DENY'|'ALLOW'|null $ShareBeeAction
 * @property 'DENY'|'ALLOW'|null $UseBeeAction
 * @property 'DENY'|'ALLOW'|null $GongAction
 * @property 'DENY'|'ALLOW'|null $CreateAndUpdateGongAction
 * @property 'DENY'|'ALLOW'|null $ShareGongAction
 * @property 'DENY'|'ALLOW'|null $UseGongAction
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
 * @property 'DENY'|'ALLOW'|null $FileDataSource
 * @property 'DENY'|'ALLOW'|null $CreateFileDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateFileDataSource
 * @property 'DENY'|'ALLOW'|null $ShareFileDataSource
 * @property 'DENY'|'ALLOW'|null $S3DataSource
 * @property 'DENY'|'ALLOW'|null $CreateS3DataSource
 * @property 'DENY'|'ALLOW'|null $UpdateS3DataSource
 * @property 'DENY'|'ALLOW'|null $ShareS3DataSource
 * @property 'DENY'|'ALLOW'|null $S3AnalyticsDataSource
 * @property 'DENY'|'ALLOW'|null $CreateS3AnalyticsDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateS3AnalyticsDataSource
 * @property 'DENY'|'ALLOW'|null $ShareS3AnalyticsDataSource
 * @property 'DENY'|'ALLOW'|null $S3TablesDataSource
 * @property 'DENY'|'ALLOW'|null $CreateS3TablesDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateS3TablesDataSource
 * @property 'DENY'|'ALLOW'|null $ShareS3TablesDataSource
 * @property 'DENY'|'ALLOW'|null $AthenaDataSource
 * @property 'DENY'|'ALLOW'|null $CreateAthenaDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateAthenaDataSource
 * @property 'DENY'|'ALLOW'|null $ShareAthenaDataSource
 * @property 'DENY'|'ALLOW'|null $RdsDataSource
 * @property 'DENY'|'ALLOW'|null $CreateRdsDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateRdsDataSource
 * @property 'DENY'|'ALLOW'|null $ShareRdsDataSource
 * @property 'DENY'|'ALLOW'|null $RedshiftAutoDiscoveredDataSource
 * @property 'DENY'|'ALLOW'|null $CreateRedshiftAutoDiscoveredDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateRedshiftAutoDiscoveredDataSource
 * @property 'DENY'|'ALLOW'|null $ShareRedshiftAutoDiscoveredDataSource
 * @property 'DENY'|'ALLOW'|null $RedshiftManualDataSource
 * @property 'DENY'|'ALLOW'|null $CreateRedshiftManualDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateRedshiftManualDataSource
 * @property 'DENY'|'ALLOW'|null $ShareRedshiftManualDataSource
 * @property 'DENY'|'ALLOW'|null $OpenSearchDataSource
 * @property 'DENY'|'ALLOW'|null $CreateOpenSearchDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateOpenSearchDataSource
 * @property 'DENY'|'ALLOW'|null $ShareOpenSearchDataSource
 * @property 'DENY'|'ALLOW'|null $TimestreamDataSource
 * @property 'DENY'|'ALLOW'|null $CreateTimestreamDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateTimestreamDataSource
 * @property 'DENY'|'ALLOW'|null $ShareTimestreamDataSource
 * @property 'DENY'|'ALLOW'|null $AuroraDataSource
 * @property 'DENY'|'ALLOW'|null $CreateAuroraDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateAuroraDataSource
 * @property 'DENY'|'ALLOW'|null $ShareAuroraDataSource
 * @property 'DENY'|'ALLOW'|null $MySqlDataSource
 * @property 'DENY'|'ALLOW'|null $CreateMySqlDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateMySqlDataSource
 * @property 'DENY'|'ALLOW'|null $ShareMySqlDataSource
 * @property 'DENY'|'ALLOW'|null $PostgreSqlDataSource
 * @property 'DENY'|'ALLOW'|null $CreatePostgreSqlDataSource
 * @property 'DENY'|'ALLOW'|null $UpdatePostgreSqlDataSource
 * @property 'DENY'|'ALLOW'|null $SharePostgreSqlDataSource
 * @property 'DENY'|'ALLOW'|null $OracleDataSource
 * @property 'DENY'|'ALLOW'|null $CreateOracleDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateOracleDataSource
 * @property 'DENY'|'ALLOW'|null $ShareOracleDataSource
 * @property 'DENY'|'ALLOW'|null $SqlServerDataSource
 * @property 'DENY'|'ALLOW'|null $CreateSqlServerDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateSqlServerDataSource
 * @property 'DENY'|'ALLOW'|null $ShareSqlServerDataSource
 * @property 'DENY'|'ALLOW'|null $MariaDbDataSource
 * @property 'DENY'|'ALLOW'|null $CreateMariaDbDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateMariaDbDataSource
 * @property 'DENY'|'ALLOW'|null $ShareMariaDbDataSource
 * @property 'DENY'|'ALLOW'|null $SnowflakeDataSource
 * @property 'DENY'|'ALLOW'|null $CreateSnowflakeDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateSnowflakeDataSource
 * @property 'DENY'|'ALLOW'|null $ShareSnowflakeDataSource
 * @property 'DENY'|'ALLOW'|null $GoogleBigQueryDataSource
 * @property 'DENY'|'ALLOW'|null $CreateGoogleBigQueryDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateGoogleBigQueryDataSource
 * @property 'DENY'|'ALLOW'|null $ShareGoogleBigQueryDataSource
 * @property 'DENY'|'ALLOW'|null $DatabricksDataSource
 * @property 'DENY'|'ALLOW'|null $CreateDatabricksDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateDatabricksDataSource
 * @property 'DENY'|'ALLOW'|null $ShareDatabricksDataSource
 * @property 'DENY'|'ALLOW'|null $StarburstDataSource
 * @property 'DENY'|'ALLOW'|null $CreateStarburstDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateStarburstDataSource
 * @property 'DENY'|'ALLOW'|null $ShareStarburstDataSource
 * @property 'DENY'|'ALLOW'|null $TrinoDataSource
 * @property 'DENY'|'ALLOW'|null $CreateTrinoDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateTrinoDataSource
 * @property 'DENY'|'ALLOW'|null $ShareTrinoDataSource
 * @property 'DENY'|'ALLOW'|null $ImpalaDataSource
 * @property 'DENY'|'ALLOW'|null $CreateImpalaDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateImpalaDataSource
 * @property 'DENY'|'ALLOW'|null $ShareImpalaDataSource
 * @property 'DENY'|'ALLOW'|null $TeradataDataSource
 * @property 'DENY'|'ALLOW'|null $CreateTeradataDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateTeradataDataSource
 * @property 'DENY'|'ALLOW'|null $ShareTeradataDataSource
 * @property 'DENY'|'ALLOW'|null $PrestoDataSource
 * @property 'DENY'|'ALLOW'|null $CreatePrestoDataSource
 * @property 'DENY'|'ALLOW'|null $UpdatePrestoDataSource
 * @property 'DENY'|'ALLOW'|null $SharePrestoDataSource
 * @property 'DENY'|'ALLOW'|null $SparkDataSource
 * @property 'DENY'|'ALLOW'|null $CreateSparkDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateSparkDataSource
 * @property 'DENY'|'ALLOW'|null $ShareSparkDataSource
 * @property 'DENY'|'ALLOW'|null $ExasolDataSource
 * @property 'DENY'|'ALLOW'|null $CreateExasolDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateExasolDataSource
 * @property 'DENY'|'ALLOW'|null $ShareExasolDataSource
 * @property 'DENY'|'ALLOW'|null $Db2DataSource
 * @property 'DENY'|'ALLOW'|null $CreateDb2DataSource
 * @property 'DENY'|'ALLOW'|null $UpdateDb2DataSource
 * @property 'DENY'|'ALLOW'|null $ShareDb2DataSource
 * @property 'DENY'|'ALLOW'|null $SapHanaDataSource
 * @property 'DENY'|'ALLOW'|null $CreateSapHanaDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateSapHanaDataSource
 * @property 'DENY'|'ALLOW'|null $ShareSapHanaDataSource
 * @property 'DENY'|'ALLOW'|null $DenodoDataSource
 * @property 'DENY'|'ALLOW'|null $CreateDenodoDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateDenodoDataSource
 * @property 'DENY'|'ALLOW'|null $ShareDenodoDataSource
 * @property 'DENY'|'ALLOW'|null $DremioDataSource
 * @property 'DENY'|'ALLOW'|null $CreateDremioDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateDremioDataSource
 * @property 'DENY'|'ALLOW'|null $ShareDremioDataSource
 * @property 'DENY'|'ALLOW'|null $SalesforceDataSource
 * @property 'DENY'|'ALLOW'|null $CreateSalesforceDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateSalesforceDataSource
 * @property 'DENY'|'ALLOW'|null $ShareSalesforceDataSource
 * @property 'DENY'|'ALLOW'|null $RadiantDataSource
 * @property 'DENY'|'ALLOW'|null $CreateRadiantDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateRadiantDataSource
 * @property 'DENY'|'ALLOW'|null $ShareRadiantDataSource
 * @property 'DENY'|'ALLOW'|null $PayPalDataSource
 * @property 'DENY'|'ALLOW'|null $CreatePayPalDataSource
 * @property 'DENY'|'ALLOW'|null $UpdatePayPalDataSource
 * @property 'DENY'|'ALLOW'|null $SharePayPalDataSource
 * @property 'DENY'|'ALLOW'|null $SquareDataSource
 * @property 'DENY'|'ALLOW'|null $CreateSquareDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateSquareDataSource
 * @property 'DENY'|'ALLOW'|null $ShareSquareDataSource
 * @property 'DENY'|'ALLOW'|null $GitHubDataSource
 * @property 'DENY'|'ALLOW'|null $CreateGitHubDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateGitHubDataSource
 * @property 'DENY'|'ALLOW'|null $ShareGitHubDataSource
 * @property 'DENY'|'ALLOW'|null $TwitterDataSource
 * @property 'DENY'|'ALLOW'|null $CreateTwitterDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateTwitterDataSource
 * @property 'DENY'|'ALLOW'|null $ShareTwitterDataSource
 * @property 'DENY'|'ALLOW'|null $JiraDataSource
 * @property 'DENY'|'ALLOW'|null $CreateJiraDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateJiraDataSource
 * @property 'DENY'|'ALLOW'|null $ShareJiraDataSource
 * @property 'DENY'|'ALLOW'|null $ServiceNowDataSource
 * @property 'DENY'|'ALLOW'|null $CreateServiceNowDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateServiceNowDataSource
 * @property 'DENY'|'ALLOW'|null $ShareServiceNowDataSource
 * @property 'DENY'|'ALLOW'|null $AdobeAnalyticsDataSource
 * @property 'DENY'|'ALLOW'|null $CreateAdobeAnalyticsDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateAdobeAnalyticsDataSource
 * @property 'DENY'|'ALLOW'|null $ShareAdobeAnalyticsDataSource
 * @property 'DENY'|'ALLOW'|null $GoogleAnalyticsDataSource
 * @property 'DENY'|'ALLOW'|null $CreateGoogleAnalyticsDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateGoogleAnalyticsDataSource
 * @property 'DENY'|'ALLOW'|null $ShareGoogleAnalyticsDataSource
 * @property 'DENY'|'ALLOW'|null $GoogleSheetsDataSource
 * @property 'DENY'|'ALLOW'|null $CreateGoogleSheetsDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateGoogleSheetsDataSource
 * @property 'DENY'|'ALLOW'|null $ShareGoogleSheetsDataSource
 * @property 'DENY'|'ALLOW'|null $DocumentDbDataSource
 * @property 'DENY'|'ALLOW'|null $CreateDocumentDbDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateDocumentDbDataSource
 * @property 'DENY'|'ALLOW'|null $ShareDocumentDbDataSource
 * @property 'DENY'|'ALLOW'|null $MongoDbDataSource
 * @property 'DENY'|'ALLOW'|null $CreateMongoDbDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateMongoDbDataSource
 * @property 'DENY'|'ALLOW'|null $ShareMongoDbDataSource
 * @property 'DENY'|'ALLOW'|null $MongoAtlasDataSource
 * @property 'DENY'|'ALLOW'|null $CreateMongoAtlasDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateMongoAtlasDataSource
 * @property 'DENY'|'ALLOW'|null $ShareMongoAtlasDataSource
 * @property 'DENY'|'ALLOW'|null $DynamoDbDataSource
 * @property 'DENY'|'ALLOW'|null $CreateDynamoDbDataSource
 * @property 'DENY'|'ALLOW'|null $UpdateDynamoDbDataSource
 * @property 'DENY'|'ALLOW'|null $ShareDynamoDbDataSource
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
     *     PagerDutyAgentAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdatePagerDutyAgentAction?: 'DENY'|'ALLOW'|null,
     *     SharePagerDutyAgentAction?: 'DENY'|'ALLOW'|null,
     *     UsePagerDutyAgentAction?: 'DENY'|'ALLOW'|null,
     *     VisierAgentAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateVisierAgentAction?: 'DENY'|'ALLOW'|null,
     *     ShareVisierAgentAction?: 'DENY'|'ALLOW'|null,
     *     UseVisierAgentAction?: 'DENY'|'ALLOW'|null,
     *     ZoomAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateZoomAction?: 'DENY'|'ALLOW'|null,
     *     ShareZoomAction?: 'DENY'|'ALLOW'|null,
     *     UseZoomAction?: 'DENY'|'ALLOW'|null,
     *     SnowFlakeAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateSnowFlakeAction?: 'DENY'|'ALLOW'|null,
     *     ShareSnowFlakeAction?: 'DENY'|'ALLOW'|null,
     *     UseSnowFlakeAction?: 'DENY'|'ALLOW'|null,
     *     ZapierAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateZapierAction?: 'DENY'|'ALLOW'|null,
     *     ShareZapierAction?: 'DENY'|'ALLOW'|null,
     *     UseZapierAction?: 'DENY'|'ALLOW'|null,
     *     AirtableAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateAirtableAction?: 'DENY'|'ALLOW'|null,
     *     ShareAirtableAction?: 'DENY'|'ALLOW'|null,
     *     UseAirtableAction?: 'DENY'|'ALLOW'|null,
     *     DropboxAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateDropboxAction?: 'DENY'|'ALLOW'|null,
     *     ShareDropboxAction?: 'DENY'|'ALLOW'|null,
     *     UseDropboxAction?: 'DENY'|'ALLOW'|null,
     *     GmailAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateGmailAction?: 'DENY'|'ALLOW'|null,
     *     ShareGmailAction?: 'DENY'|'ALLOW'|null,
     *     UseGmailAction?: 'DENY'|'ALLOW'|null,
     *     GoogleAnalyticsAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateGoogleAnalyticsAction?: 'DENY'|'ALLOW'|null,
     *     ShareGoogleAnalyticsAction?: 'DENY'|'ALLOW'|null,
     *     UseGoogleAnalyticsAction?: 'DENY'|'ALLOW'|null,
     *     GoogleDocsAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateGoogleDocsAction?: 'DENY'|'ALLOW'|null,
     *     ShareGoogleDocsAction?: 'DENY'|'ALLOW'|null,
     *     UseGoogleDocsAction?: 'DENY'|'ALLOW'|null,
     *     GoogleDriveAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateGoogleDriveAction?: 'DENY'|'ALLOW'|null,
     *     ShareGoogleDriveAction?: 'DENY'|'ALLOW'|null,
     *     UseGoogleDriveAction?: 'DENY'|'ALLOW'|null,
     *     GoogleMeetAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateGoogleMeetAction?: 'DENY'|'ALLOW'|null,
     *     ShareGoogleMeetAction?: 'DENY'|'ALLOW'|null,
     *     UseGoogleMeetAction?: 'DENY'|'ALLOW'|null,
     *     GoogleSheetsAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateGoogleSheetsAction?: 'DENY'|'ALLOW'|null,
     *     ShareGoogleSheetsAction?: 'DENY'|'ALLOW'|null,
     *     UseGoogleSheetsAction?: 'DENY'|'ALLOW'|null,
     *     GoogleSlidesAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateGoogleSlidesAction?: 'DENY'|'ALLOW'|null,
     *     ShareGoogleSlidesAction?: 'DENY'|'ALLOW'|null,
     *     UseGoogleSlidesAction?: 'DENY'|'ALLOW'|null,
     *     QuickBooksAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateQuickBooksAction?: 'DENY'|'ALLOW'|null,
     *     ShareQuickBooksAction?: 'DENY'|'ALLOW'|null,
     *     UseQuickBooksAction?: 'DENY'|'ALLOW'|null,
     *     FigmaAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateFigmaAction?: 'DENY'|'ALLOW'|null,
     *     ShareFigmaAction?: 'DENY'|'ALLOW'|null,
     *     UseFigmaAction?: 'DENY'|'ALLOW'|null,
     *     WhatsAppAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateWhatsAppAction?: 'DENY'|'ALLOW'|null,
     *     ShareWhatsAppAction?: 'DENY'|'ALLOW'|null,
     *     UseWhatsAppAction?: 'DENY'|'ALLOW'|null,
     *     GoogleChatAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateGoogleChatAction?: 'DENY'|'ALLOW'|null,
     *     ShareGoogleChatAction?: 'DENY'|'ALLOW'|null,
     *     UseGoogleChatAction?: 'DENY'|'ALLOW'|null,
     *     OneNoteAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateOneNoteAction?: 'DENY'|'ALLOW'|null,
     *     ShareOneNoteAction?: 'DENY'|'ALLOW'|null,
     *     UseOneNoteAction?: 'DENY'|'ALLOW'|null,
     *     ShopifyAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateShopifyAction?: 'DENY'|'ALLOW'|null,
     *     ShareShopifyAction?: 'DENY'|'ALLOW'|null,
     *     UseShopifyAction?: 'DENY'|'ALLOW'|null,
     *     AdobeAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateAdobeAction?: 'DENY'|'ALLOW'|null,
     *     ShareAdobeAction?: 'DENY'|'ALLOW'|null,
     *     UseAdobeAction?: 'DENY'|'ALLOW'|null,
     *     CiscoWebexVidcastAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateCiscoWebexVidcastAction?: 'DENY'|'ALLOW'|null,
     *     ShareCiscoWebexVidcastAction?: 'DENY'|'ALLOW'|null,
     *     UseCiscoWebexVidcastAction?: 'DENY'|'ALLOW'|null,
     *     CiscoWebexMeetingsAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateCiscoWebexMeetingsAction?: 'DENY'|'ALLOW'|null,
     *     ShareCiscoWebexMeetingsAction?: 'DENY'|'ALLOW'|null,
     *     UseCiscoWebexMeetingsAction?: 'DENY'|'ALLOW'|null,
     *     DunAndBradstreetAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateDunAndBradstreetAction?: 'DENY'|'ALLOW'|null,
     *     ShareDunAndBradstreetAction?: 'DENY'|'ALLOW'|null,
     *     UseDunAndBradstreetAction?: 'DENY'|'ALLOW'|null,
     *     HGInsightsAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateHGInsightsAction?: 'DENY'|'ALLOW'|null,
     *     ShareHGInsightsAction?: 'DENY'|'ALLOW'|null,
     *     UseHGInsightsAction?: 'DENY'|'ALLOW'|null,
     *     ZoomInfoAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateZoomInfoAction?: 'DENY'|'ALLOW'|null,
     *     ShareZoomInfoAction?: 'DENY'|'ALLOW'|null,
     *     UseZoomInfoAction?: 'DENY'|'ALLOW'|null,
     *     MoodysAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateMoodysAction?: 'DENY'|'ALLOW'|null,
     *     ShareMoodysAction?: 'DENY'|'ALLOW'|null,
     *     UseMoodysAction?: 'DENY'|'ALLOW'|null,
     *     BeeAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateBeeAction?: 'DENY'|'ALLOW'|null,
     *     ShareBeeAction?: 'DENY'|'ALLOW'|null,
     *     UseBeeAction?: 'DENY'|'ALLOW'|null,
     *     GongAction?: 'DENY'|'ALLOW'|null,
     *     CreateAndUpdateGongAction?: 'DENY'|'ALLOW'|null,
     *     ShareGongAction?: 'DENY'|'ALLOW'|null,
     *     UseGongAction?: 'DENY'|'ALLOW'|null,
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
     *     QuickEventTrigger?: 'DENY'|'ALLOW'|null,
     *     FileDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateFileDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateFileDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareFileDataSource?: 'DENY'|'ALLOW'|null,
     *     S3DataSource?: 'DENY'|'ALLOW'|null,
     *     CreateS3DataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateS3DataSource?: 'DENY'|'ALLOW'|null,
     *     ShareS3DataSource?: 'DENY'|'ALLOW'|null,
     *     S3AnalyticsDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateS3AnalyticsDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateS3AnalyticsDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareS3AnalyticsDataSource?: 'DENY'|'ALLOW'|null,
     *     S3TablesDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateS3TablesDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateS3TablesDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareS3TablesDataSource?: 'DENY'|'ALLOW'|null,
     *     AthenaDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateAthenaDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateAthenaDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareAthenaDataSource?: 'DENY'|'ALLOW'|null,
     *     RdsDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateRdsDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateRdsDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareRdsDataSource?: 'DENY'|'ALLOW'|null,
     *     RedshiftAutoDiscoveredDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateRedshiftAutoDiscoveredDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateRedshiftAutoDiscoveredDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareRedshiftAutoDiscoveredDataSource?: 'DENY'|'ALLOW'|null,
     *     RedshiftManualDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateRedshiftManualDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateRedshiftManualDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareRedshiftManualDataSource?: 'DENY'|'ALLOW'|null,
     *     OpenSearchDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateOpenSearchDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateOpenSearchDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareOpenSearchDataSource?: 'DENY'|'ALLOW'|null,
     *     TimestreamDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateTimestreamDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateTimestreamDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareTimestreamDataSource?: 'DENY'|'ALLOW'|null,
     *     AuroraDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateAuroraDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateAuroraDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareAuroraDataSource?: 'DENY'|'ALLOW'|null,
     *     MySqlDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateMySqlDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateMySqlDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareMySqlDataSource?: 'DENY'|'ALLOW'|null,
     *     PostgreSqlDataSource?: 'DENY'|'ALLOW'|null,
     *     CreatePostgreSqlDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdatePostgreSqlDataSource?: 'DENY'|'ALLOW'|null,
     *     SharePostgreSqlDataSource?: 'DENY'|'ALLOW'|null,
     *     OracleDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateOracleDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateOracleDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareOracleDataSource?: 'DENY'|'ALLOW'|null,
     *     SqlServerDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateSqlServerDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateSqlServerDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareSqlServerDataSource?: 'DENY'|'ALLOW'|null,
     *     MariaDbDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateMariaDbDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateMariaDbDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareMariaDbDataSource?: 'DENY'|'ALLOW'|null,
     *     SnowflakeDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateSnowflakeDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateSnowflakeDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareSnowflakeDataSource?: 'DENY'|'ALLOW'|null,
     *     GoogleBigQueryDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateGoogleBigQueryDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateGoogleBigQueryDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareGoogleBigQueryDataSource?: 'DENY'|'ALLOW'|null,
     *     DatabricksDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateDatabricksDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateDatabricksDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareDatabricksDataSource?: 'DENY'|'ALLOW'|null,
     *     StarburstDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateStarburstDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateStarburstDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareStarburstDataSource?: 'DENY'|'ALLOW'|null,
     *     TrinoDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateTrinoDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateTrinoDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareTrinoDataSource?: 'DENY'|'ALLOW'|null,
     *     ImpalaDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateImpalaDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateImpalaDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareImpalaDataSource?: 'DENY'|'ALLOW'|null,
     *     TeradataDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateTeradataDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateTeradataDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareTeradataDataSource?: 'DENY'|'ALLOW'|null,
     *     PrestoDataSource?: 'DENY'|'ALLOW'|null,
     *     CreatePrestoDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdatePrestoDataSource?: 'DENY'|'ALLOW'|null,
     *     SharePrestoDataSource?: 'DENY'|'ALLOW'|null,
     *     SparkDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateSparkDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateSparkDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareSparkDataSource?: 'DENY'|'ALLOW'|null,
     *     ExasolDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateExasolDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateExasolDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareExasolDataSource?: 'DENY'|'ALLOW'|null,
     *     Db2DataSource?: 'DENY'|'ALLOW'|null,
     *     CreateDb2DataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateDb2DataSource?: 'DENY'|'ALLOW'|null,
     *     ShareDb2DataSource?: 'DENY'|'ALLOW'|null,
     *     SapHanaDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateSapHanaDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateSapHanaDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareSapHanaDataSource?: 'DENY'|'ALLOW'|null,
     *     DenodoDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateDenodoDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateDenodoDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareDenodoDataSource?: 'DENY'|'ALLOW'|null,
     *     DremioDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateDremioDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateDremioDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareDremioDataSource?: 'DENY'|'ALLOW'|null,
     *     SalesforceDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateSalesforceDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateSalesforceDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareSalesforceDataSource?: 'DENY'|'ALLOW'|null,
     *     RadiantDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateRadiantDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateRadiantDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareRadiantDataSource?: 'DENY'|'ALLOW'|null,
     *     PayPalDataSource?: 'DENY'|'ALLOW'|null,
     *     CreatePayPalDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdatePayPalDataSource?: 'DENY'|'ALLOW'|null,
     *     SharePayPalDataSource?: 'DENY'|'ALLOW'|null,
     *     SquareDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateSquareDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateSquareDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareSquareDataSource?: 'DENY'|'ALLOW'|null,
     *     GitHubDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateGitHubDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateGitHubDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareGitHubDataSource?: 'DENY'|'ALLOW'|null,
     *     TwitterDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateTwitterDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateTwitterDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareTwitterDataSource?: 'DENY'|'ALLOW'|null,
     *     JiraDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateJiraDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateJiraDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareJiraDataSource?: 'DENY'|'ALLOW'|null,
     *     ServiceNowDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateServiceNowDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateServiceNowDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareServiceNowDataSource?: 'DENY'|'ALLOW'|null,
     *     AdobeAnalyticsDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateAdobeAnalyticsDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateAdobeAnalyticsDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareAdobeAnalyticsDataSource?: 'DENY'|'ALLOW'|null,
     *     GoogleAnalyticsDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateGoogleAnalyticsDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateGoogleAnalyticsDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareGoogleAnalyticsDataSource?: 'DENY'|'ALLOW'|null,
     *     GoogleSheetsDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateGoogleSheetsDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateGoogleSheetsDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareGoogleSheetsDataSource?: 'DENY'|'ALLOW'|null,
     *     DocumentDbDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateDocumentDbDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateDocumentDbDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareDocumentDbDataSource?: 'DENY'|'ALLOW'|null,
     *     MongoDbDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateMongoDbDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateMongoDbDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareMongoDbDataSource?: 'DENY'|'ALLOW'|null,
     *     MongoAtlasDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateMongoAtlasDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateMongoAtlasDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareMongoAtlasDataSource?: 'DENY'|'ALLOW'|null,
     *     DynamoDbDataSource?: 'DENY'|'ALLOW'|null,
     *     CreateDynamoDbDataSource?: 'DENY'|'ALLOW'|null,
     *     UpdateDynamoDbDataSource?: 'DENY'|'ALLOW'|null,
     *     ShareDynamoDbDataSource?: 'DENY'|'ALLOW'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
