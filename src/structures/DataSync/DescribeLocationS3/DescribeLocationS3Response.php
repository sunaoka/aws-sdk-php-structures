<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationS3;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $LocationArn
 * @property string $LocationUri
 * @property 'STANDARD'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_INSTANT_RETRIEVAL' $S3StorageClass
 * @property Shapes\S3Config $S3Config
 * @property list<string> $AgentArns
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class DescribeLocationS3Response extends Response
{
}
