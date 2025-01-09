<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationAzureBlob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $LocationArn
 * @property string $LocationUri
 * @property 'SAS' $AuthenticationType
 * @property 'BLOCK' $BlobType
 * @property 'HOT'|'COOL'|'ARCHIVE' $AccessTier
 * @property list<string> $AgentArns
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class DescribeLocationAzureBlobResponse extends Response
{
}
