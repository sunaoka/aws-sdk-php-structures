<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHub;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $HubName
 * @property string $HubArn
 * @property string $HubDisplayName
 * @property string $HubDescription
 * @property list<string> $HubSearchKeywords
 * @property Shapes\HubS3StorageConfig $S3StorageConfig
 * @property 'InService'|'Creating'|'Updating'|'Deleting'|'CreateFailed'|'UpdateFailed'|'DeleteFailed' $HubStatus
 * @property string $FailureReason
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class DescribeHubResponse extends Response
{
}
