<?php

namespace Sunaoka\Aws\Structures\CognitoSync;

class CognitoSyncClient extends \Aws\CognitoSync\CognitoSyncClient
{
    use BulkPublish\BulkPublishTrait;
    use DeleteDataset\DeleteDatasetTrait;
    use DescribeDataset\DescribeDatasetTrait;
    use DescribeIdentityPoolUsage\DescribeIdentityPoolUsageTrait;
    use DescribeIdentityUsage\DescribeIdentityUsageTrait;
    use GetBulkPublishDetails\GetBulkPublishDetailsTrait;
    use GetCognitoEvents\GetCognitoEventsTrait;
    use GetIdentityPoolConfiguration\GetIdentityPoolConfigurationTrait;
    use ListDatasets\ListDatasetsTrait;
    use ListIdentityPoolUsage\ListIdentityPoolUsageTrait;
    use ListRecords\ListRecordsTrait;
    use RegisterDevice\RegisterDeviceTrait;
    use SetCognitoEvents\SetCognitoEventsTrait;
    use SetIdentityPoolConfiguration\SetIdentityPoolConfigurationTrait;
    use SubscribeToDataset\SubscribeToDatasetTrait;
    use UnsubscribeFromDataset\UnsubscribeFromDatasetTrait;
    use UpdateRecords\UpdateRecordsTrait;
}
