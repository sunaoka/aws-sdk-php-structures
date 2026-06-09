<?php

namespace Sunaoka\Aws\Structures\Odb\ListAutonomousDatabases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ADG'|'BACKUP_BASED'|null $disasterRecoveryType
 * @property bool|null $isReplicateAutomaticBackups
 * @property bool|null $isSnapshotStandby
 * @property \Aws\Api\DateTimeResult|null $timeSnapshotStandbyEnabledTill
 */
class DisasterRecoveryConfiguration extends Shape
{
    /**
     * @param array{
     *     disasterRecoveryType?: 'ADG'|'BACKUP_BASED'|null,
     *     isReplicateAutomaticBackups?: bool|null,
     *     isSnapshotStandby?: bool|null,
     *     timeSnapshotStandbyEnabledTill?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
