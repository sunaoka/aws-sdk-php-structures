<?php

namespace Sunaoka\Aws\Structures\DataExchange;

class DataExchangeClient extends \Aws\DataExchange\DataExchangeClient
{
    use AcceptDataGrant\AcceptDataGrantTrait;
    use CancelJob\CancelJobTrait;
    use CreateDataGrant\CreateDataGrantTrait;
    use CreateDataSet\CreateDataSetTrait;
    use CreateEventAction\CreateEventActionTrait;
    use CreateJob\CreateJobTrait;
    use CreateRevision\CreateRevisionTrait;
    use DeleteAsset\DeleteAssetTrait;
    use DeleteDataGrant\DeleteDataGrantTrait;
    use DeleteDataSet\DeleteDataSetTrait;
    use DeleteEventAction\DeleteEventActionTrait;
    use DeleteRevision\DeleteRevisionTrait;
    use GetAsset\GetAssetTrait;
    use GetDataGrant\GetDataGrantTrait;
    use GetDataSet\GetDataSetTrait;
    use GetEventAction\GetEventActionTrait;
    use GetJob\GetJobTrait;
    use GetReceivedDataGrant\GetReceivedDataGrantTrait;
    use GetRevision\GetRevisionTrait;
    use ListDataGrants\ListDataGrantsTrait;
    use ListDataSetRevisions\ListDataSetRevisionsTrait;
    use ListDataSets\ListDataSetsTrait;
    use ListEventActions\ListEventActionsTrait;
    use ListJobs\ListJobsTrait;
    use ListReceivedDataGrants\ListReceivedDataGrantsTrait;
    use ListRevisionAssets\ListRevisionAssetsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RevokeRevision\RevokeRevisionTrait;
    use SendApiAsset\SendApiAssetTrait;
    use SendDataSetNotification\SendDataSetNotificationTrait;
    use StartJob\StartJobTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAsset\UpdateAssetTrait;
    use UpdateDataSet\UpdateDataSetTrait;
    use UpdateEventAction\UpdateEventActionTrait;
    use UpdateRevision\UpdateRevisionTrait;
}
