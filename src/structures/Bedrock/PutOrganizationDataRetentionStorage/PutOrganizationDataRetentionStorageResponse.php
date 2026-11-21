<?php

namespace Sunaoka\Aws\Structures\Bedrock\PutOrganizationDataRetentionStorage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'account'|'organization'|'project' $scope
 * @property 'anthropic'|'openai' $modelProvider
 * @property 'customer_managed'|'amazon_managed' $storageDestination
 * @property Shapes\DataRetentionStorageConfiguration|null $storageConfiguration
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'pending'|'active'|'access_denied'|null $kmsKeyStatus
 * @property 'pending'|'active'|'access_denied'|null $s3BucketStatus
 */
class PutOrganizationDataRetentionStorageResponse extends Response
{
}
