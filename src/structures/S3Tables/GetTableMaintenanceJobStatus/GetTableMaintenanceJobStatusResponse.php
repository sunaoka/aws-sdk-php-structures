<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableMaintenanceJobStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $tableARN
 * @property array<'icebergCompaction'|'icebergSnapshotManagement'|'icebergUnreferencedFileRemoval', Shapes\TableMaintenanceJobStatusValue> $status
 */
class GetTableMaintenanceJobStatusResponse extends Response
{
}
