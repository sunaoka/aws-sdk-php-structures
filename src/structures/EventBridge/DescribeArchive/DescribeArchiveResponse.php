<?php

namespace Sunaoka\Aws\Structures\EventBridge\DescribeArchive;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ArchiveArn
 * @property string|null $ArchiveName
 * @property string|null $EventSourceArn
 * @property string|null $Description
 * @property string|null $EventPattern
 * @property 'ENABLED'|'DISABLED'|'CREATING'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED'|null $State
 * @property string|null $StateReason
 * @property string|null $KmsKeyIdentifier
 * @property int<0, max>|null $RetentionDays
 * @property int|null $SizeBytes
 * @property int|null $EventCount
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 */
class DescribeArchiveResponse extends Response
{
}
