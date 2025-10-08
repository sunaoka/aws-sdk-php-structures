<?php

namespace Sunaoka\Aws\Structures\CloudTrail;

class CloudTrailClient extends \Aws\CloudTrail\CloudTrailClient
{
    use AddTags\AddTagsTrait;
    use CancelQuery\CancelQueryTrait;
    use CreateChannel\CreateChannelTrait;
    use CreateDashboard\CreateDashboardTrait;
    use CreateEventDataStore\CreateEventDataStoreTrait;
    use CreateTrail\CreateTrailTrait;
    use DeleteChannel\DeleteChannelTrait;
    use DeleteDashboard\DeleteDashboardTrait;
    use DeleteEventDataStore\DeleteEventDataStoreTrait;
    use DeleteResourcePolicy\DeleteResourcePolicyTrait;
    use DeleteTrail\DeleteTrailTrait;
    use DeregisterOrganizationDelegatedAdmin\DeregisterOrganizationDelegatedAdminTrait;
    use DescribeQuery\DescribeQueryTrait;
    use DescribeTrails\DescribeTrailsTrait;
    use DisableFederation\DisableFederationTrait;
    use EnableFederation\EnableFederationTrait;
    use GenerateQuery\GenerateQueryTrait;
    use GetChannel\GetChannelTrait;
    use GetDashboard\GetDashboardTrait;
    use GetEventConfiguration\GetEventConfigurationTrait;
    use GetEventDataStore\GetEventDataStoreTrait;
    use GetEventSelectors\GetEventSelectorsTrait;
    use GetImport\GetImportTrait;
    use GetInsightSelectors\GetInsightSelectorsTrait;
    use GetQueryResults\GetQueryResultsTrait;
    use GetResourcePolicy\GetResourcePolicyTrait;
    use GetTrail\GetTrailTrait;
    use GetTrailStatus\GetTrailStatusTrait;
    use ListChannels\ListChannelsTrait;
    use ListDashboards\ListDashboardsTrait;
    use ListEventDataStores\ListEventDataStoresTrait;
    use ListImportFailures\ListImportFailuresTrait;
    use ListImports\ListImportsTrait;
    use ListInsightsMetricData\ListInsightsMetricDataTrait;
    use ListPublicKeys\ListPublicKeysTrait;
    use ListQueries\ListQueriesTrait;
    use ListTags\ListTagsTrait;
    use ListTrails\ListTrailsTrait;
    use LookupEvents\LookupEventsTrait;
    use PutEventConfiguration\PutEventConfigurationTrait;
    use PutEventSelectors\PutEventSelectorsTrait;
    use PutInsightSelectors\PutInsightSelectorsTrait;
    use PutResourcePolicy\PutResourcePolicyTrait;
    use RegisterOrganizationDelegatedAdmin\RegisterOrganizationDelegatedAdminTrait;
    use RemoveTags\RemoveTagsTrait;
    use RestoreEventDataStore\RestoreEventDataStoreTrait;
    use SearchSampleQueries\SearchSampleQueriesTrait;
    use StartDashboardRefresh\StartDashboardRefreshTrait;
    use StartEventDataStoreIngestion\StartEventDataStoreIngestionTrait;
    use StartImport\StartImportTrait;
    use StartLogging\StartLoggingTrait;
    use StartQuery\StartQueryTrait;
    use StopEventDataStoreIngestion\StopEventDataStoreIngestionTrait;
    use StopImport\StopImportTrait;
    use StopLogging\StopLoggingTrait;
    use UpdateChannel\UpdateChannelTrait;
    use UpdateDashboard\UpdateDashboardTrait;
    use UpdateEventDataStore\UpdateEventDataStoreTrait;
    use UpdateTrail\UpdateTrailTrait;
}
