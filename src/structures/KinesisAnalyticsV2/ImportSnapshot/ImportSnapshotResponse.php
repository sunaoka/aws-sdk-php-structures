<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\ImportSnapshot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SnapshotArn
 * @property 'CREATING'|'READY'|'DELETING'|'FAILED' $SnapshotStatus
 * @property string $SnapshotOperationId
 * @property 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'CANCELLED' $SnapshotOperationStatus
 */
class ImportSnapshotResponse extends Response
{
}
