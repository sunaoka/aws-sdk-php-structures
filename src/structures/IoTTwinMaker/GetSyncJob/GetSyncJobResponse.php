<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetSyncJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $workspaceId
 * @property string $syncSource
 * @property string $syncRole
 * @property Shapes\SyncJobStatus $status
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $updateDateTime
 */
class GetSyncJobResponse extends Response
{
}
