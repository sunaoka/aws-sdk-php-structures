<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\ListEdgeAgentConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StreamName
 * @property string|null $StreamARN
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property 'SYNCING'|'ACKNOWLEDGED'|'IN_SYNC'|'SYNC_FAILED'|'DELETING'|'DELETE_FAILED'|'DELETING_ACKNOWLEDGED'|null $SyncStatus
 * @property string|null $FailedStatusDetails
 * @property EdgeConfig|null $EdgeConfig
 */
class ListEdgeAgentConfigurationsEdgeConfig extends Shape
{
    /**
     * @param array{
     *     StreamName?: string|null,
     *     StreamARN?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     SyncStatus?: 'SYNCING'|'ACKNOWLEDGED'|'IN_SYNC'|'SYNC_FAILED'|'DELETING'|'DELETE_FAILED'|'DELETING_ACKNOWLEDGED'|null,
     *     FailedStatusDetails?: string|null,
     *     EdgeConfig?: EdgeConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
