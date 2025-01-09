<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSegmentSnapshot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SnapshotId
 * @property 'COMPLETED'|'IN_PROGRESS'|'FAILED' $Status
 * @property string $StatusMessage
 * @property 'CSV'|'JSONL'|'ORC' $DataFormat
 * @property string $EncryptionKey
 * @property string $RoleArn
 * @property string $DestinationUri
 */
class GetSegmentSnapshotResponse extends Response
{
}
