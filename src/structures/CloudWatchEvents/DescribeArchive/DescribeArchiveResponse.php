<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DescribeArchive;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ArchiveArn
 * @property string $ArchiveName
 * @property string $EventSourceArn
 * @property string $Description
 * @property string $EventPattern
 * @property 'ENABLED'|'DISABLED'|'CREATING'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED' $State
 * @property string $StateReason
 * @property int<0, max> $RetentionDays
 * @property int $SizeBytes
 * @property int $EventCount
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class DescribeArchiveResponse extends Response
{
}
