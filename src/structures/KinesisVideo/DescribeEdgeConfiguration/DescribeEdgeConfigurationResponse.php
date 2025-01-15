<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DescribeEdgeConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $StreamName
 * @property string|null $StreamARN
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property 'SYNCING'|'ACKNOWLEDGED'|'IN_SYNC'|'SYNC_FAILED'|'DELETING'|'DELETE_FAILED'|'DELETING_ACKNOWLEDGED'|null $SyncStatus
 * @property string|null $FailedStatusDetails
 * @property Shapes\EdgeConfig|null $EdgeConfig
 * @property Shapes\EdgeAgentStatus|null $EdgeAgentStatus
 */
class DescribeEdgeConfigurationResponse extends Response
{
}
