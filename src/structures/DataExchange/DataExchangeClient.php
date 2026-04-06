<?php

namespace Sunaoka\Aws\Structures\DataExchange;

class DataExchangeClient extends \Aws\DataExchange\DataExchangeClient
{
    use CancelJob\CancelJobTrait;
    use CreateDataSet\CreateDataSetTrait;
    use CreateEventAction\CreateEventActionTrait;
    use CreateJob\CreateJobTrait;
    use CreateRevision\CreateRevisionTrait;
    use DeleteAsset\DeleteAssetTrait;
    use DeleteDataSet\DeleteDataSetTrait;
    use DeleteEventAction\DeleteEventActionTrait;
    use DeleteRevision\DeleteRevisionTrait;
    use GetAsset\GetAssetTrait;
    use GetDataSet\GetDataSetTrait;
    use GetEventAction\GetEventActionTrait;
    use GetJob\GetJobTrait;
    use GetRevision\GetRevisionTrait;
    use ListDataSetRevisions\ListDataSetRevisionsTrait;
    use ListDataSets\ListDataSetsTrait;
    use ListEventActions\ListEventActionsTrait;
    use ListJobs\ListJobsTrait;
    use ListRevisionAssets\ListRevisionAssetsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RevokeRevision\RevokeRevisionTrait;
    use SendApiAsset\SendApiAssetTrait;
    use StartJob\StartJobTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAsset\UpdateAssetTrait;
    use UpdateDataSet\UpdateDataSetTrait;
    use UpdateEventAction\UpdateEventActionTrait;
    use UpdateRevision\UpdateRevisionTrait;
}
