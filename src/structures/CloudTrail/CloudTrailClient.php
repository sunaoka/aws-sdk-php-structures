<?php

namespace Sunaoka\Aws\Structures\CloudTrail;

class CloudTrailClient extends \Aws\CloudTrail\CloudTrailClient
{
    use AddTags\AddTagsTrait;
    use CancelQuery\CancelQueryTrait;
    use CreateChannel\CreateChannelTrait;
    use CreateEventDataStore\CreateEventDataStoreTrait;
    use CreateTrail\CreateTrailTrait;
    use DeleteChannel\DeleteChannelTrait;
    use DeleteEventDataStore\DeleteEventDataStoreTrait;
    use DeleteResourcePolicy\DeleteResourcePolicyTrait;
    use DeleteTrail\DeleteTrailTrait;
    use DeregisterOrganizationDelegatedAdmin\DeregisterOrganizationDelegatedAdminTrait;
    use DescribeQuery\DescribeQueryTrait;
    use DescribeTrails\DescribeTrailsTrait;
    use GetChannel\GetChannelTrait;
    use GetEventDataStore\GetEventDataStoreTrait;
    use GetEventSelectors\GetEventSelectorsTrait;
    use GetImport\GetImportTrait;
    use GetInsightSelectors\GetInsightSelectorsTrait;
    use GetQueryResults\GetQueryResultsTrait;
    use GetResourcePolicy\GetResourcePolicyTrait;
    use GetTrail\GetTrailTrait;
    use GetTrailStatus\GetTrailStatusTrait;
    use ListChannels\ListChannelsTrait;
    use ListEventDataStores\ListEventDataStoresTrait;
    use ListImportFailures\ListImportFailuresTrait;
    use ListImports\ListImportsTrait;
    use ListPublicKeys\ListPublicKeysTrait;
    use ListQueries\ListQueriesTrait;
    use ListTags\ListTagsTrait;
    use ListTrails\ListTrailsTrait;
    use LookupEvents\LookupEventsTrait;
    use PutEventSelectors\PutEventSelectorsTrait;
    use PutInsightSelectors\PutInsightSelectorsTrait;
    use PutResourcePolicy\PutResourcePolicyTrait;
    use RegisterOrganizationDelegatedAdmin\RegisterOrganizationDelegatedAdminTrait;
    use RemoveTags\RemoveTagsTrait;
    use RestoreEventDataStore\RestoreEventDataStoreTrait;
    use StartEventDataStoreIngestion\StartEventDataStoreIngestionTrait;
    use StartImport\StartImportTrait;
    use StartLogging\StartLoggingTrait;
    use StartQuery\StartQueryTrait;
    use StopEventDataStoreIngestion\StopEventDataStoreIngestionTrait;
    use StopImport\StopImportTrait;
    use StopLogging\StopLoggingTrait;
    use UpdateChannel\UpdateChannelTrait;
    use UpdateEventDataStore\UpdateEventDataStoreTrait;
    use UpdateTrail\UpdateTrailTrait;
}
