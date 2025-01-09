<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartReplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationConfigArn
 * @property string $StartReplicationType
 * @property \Aws\Api\DateTimeResult $CdcStartTime
 * @property string $CdcStartPosition
 * @property string $CdcStopPosition
 */
class StartReplicationRequest extends Request
{
    /**
     * @param array{
     *     ReplicationConfigArn: string,
     *     StartReplicationType: string,
     *     CdcStartTime?: \Aws\Api\DateTimeResult,
     *     CdcStartPosition?: string,
     *     CdcStopPosition?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
