<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationS3;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $LocationArn
 * @property string|null $LocationUri
 * @property 'STANDARD'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_INSTANT_RETRIEVAL'|null $S3StorageClass
 * @property Shapes\S3Config|null $S3Config
 * @property list<string>|null $AgentArns
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 */
class DescribeLocationS3Response extends Response
{
}
