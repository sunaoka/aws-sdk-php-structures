<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\StartEdgeConfigurationUpdate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $StreamName
 * @property string $StreamARN
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property 'SYNCING'|'ACKNOWLEDGED'|'IN_SYNC'|'SYNC_FAILED'|'DELETING'|'DELETE_FAILED'|'DELETING_ACKNOWLEDGED' $SyncStatus
 * @property string $FailedStatusDetails
 * @property Shapes\EdgeConfig $EdgeConfig
 */
class StartEdgeConfigurationUpdateResponse extends Response
{
}
