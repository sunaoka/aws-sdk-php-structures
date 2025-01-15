<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHub;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $HubName
 * @property string $HubArn
 * @property string|null $HubDisplayName
 * @property string|null $HubDescription
 * @property list<string>|null $HubSearchKeywords
 * @property Shapes\HubS3StorageConfig|null $S3StorageConfig
 * @property 'InService'|'Creating'|'Updating'|'Deleting'|'CreateFailed'|'UpdateFailed'|'DeleteFailed' $HubStatus
 * @property string|null $FailureReason
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class DescribeHubResponse extends Response
{
}
