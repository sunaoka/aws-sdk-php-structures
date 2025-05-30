<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationAzureBlob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $LocationArn
 * @property string|null $LocationUri
 * @property 'SAS'|'NONE'|null $AuthenticationType
 * @property 'BLOCK'|null $BlobType
 * @property 'HOT'|'COOL'|'ARCHIVE'|null $AccessTier
 * @property list<string>|null $AgentArns
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property Shapes\ManagedSecretConfig|null $ManagedSecretConfig
 * @property Shapes\CmkSecretConfig|null $CmkSecretConfig
 * @property Shapes\CustomSecretConfig|null $CustomSecretConfig
 */
class DescribeLocationAzureBlobResponse extends Response
{
}
