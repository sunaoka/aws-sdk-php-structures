<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartReplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationConfigArn
 * @property string $StartReplicationType
 * @property string|null $PremigrationAssessmentSettings
 * @property \Aws\Api\DateTimeResult|null $CdcStartTime
 * @property string|null $CdcStartPosition
 * @property string|null $CdcStopPosition
 */
class StartReplicationRequest extends Request
{
    /**
     * @param array{
     *     ReplicationConfigArn: string,
     *     StartReplicationType: string,
     *     PremigrationAssessmentSettings?: string|null,
     *     CdcStartTime?: \Aws\Api\DateTimeResult|null,
     *     CdcStartPosition?: string|null,
     *     CdcStopPosition?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
