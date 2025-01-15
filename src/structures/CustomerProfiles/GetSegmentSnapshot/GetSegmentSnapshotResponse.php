<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSegmentSnapshot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SnapshotId
 * @property 'COMPLETED'|'IN_PROGRESS'|'FAILED' $Status
 * @property string|null $StatusMessage
 * @property 'CSV'|'JSONL'|'ORC' $DataFormat
 * @property string|null $EncryptionKey
 * @property string|null $RoleArn
 * @property string|null $DestinationUri
 */
class GetSegmentSnapshotResponse extends Response
{
}
