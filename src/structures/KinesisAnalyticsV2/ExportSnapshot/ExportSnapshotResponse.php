<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\ExportSnapshot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SnapshotOperationId
 * @property 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'CANCELLED' $SnapshotOperationStatus
 */
class ExportSnapshotResponse extends Response
{
}
