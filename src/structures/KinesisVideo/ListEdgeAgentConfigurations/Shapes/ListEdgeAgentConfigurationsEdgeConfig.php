<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\ListEdgeAgentConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StreamName
 * @property string $StreamARN
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property 'SYNCING'|'ACKNOWLEDGED'|'IN_SYNC'|'SYNC_FAILED'|'DELETING'|'DELETE_FAILED'|'DELETING_ACKNOWLEDGED' $SyncStatus
 * @property string $FailedStatusDetails
 * @property EdgeConfig $EdgeConfig
 */
class ListEdgeAgentConfigurationsEdgeConfig extends Shape
{
    /**
     * @param array{
     *     StreamName?: string,
     *     StreamARN?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     SyncStatus?: 'SYNCING'|'ACKNOWLEDGED'|'IN_SYNC'|'SYNC_FAILED'|'DELETING'|'DELETE_FAILED'|'DELETING_ACKNOWLEDGED',
     *     FailedStatusDetails?: string,
     *     EdgeConfig?: EdgeConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
