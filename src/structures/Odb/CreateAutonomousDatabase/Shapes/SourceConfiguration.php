<?php

namespace Sunaoka\Aws\Structures\Odb\CreateAutonomousDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DatabaseCloneConfiguration|null $databaseClone
 * @property RestoreFromBackupConfiguration|null $restoreFromBackup
 * @property PointInTimeRestoreConfiguration|null $pointInTimeRestore
 * @property CrossRegionDataGuardConfiguration|null $crossRegionDataGuard
 * @property CrossRegionDisasterRecoveryConfiguration|null $crossRegionDisasterRecovery
 * @property CloneToRefreshableConfiguration|null $cloneToRefreshable
 */
class SourceConfiguration extends Shape
{
    /**
     * @param array{
     *     databaseClone?: DatabaseCloneConfiguration|null,
     *     restoreFromBackup?: RestoreFromBackupConfiguration|null,
     *     pointInTimeRestore?: PointInTimeRestoreConfiguration|null,
     *     crossRegionDataGuard?: CrossRegionDataGuardConfiguration|null,
     *     crossRegionDisasterRecovery?: CrossRegionDisasterRecoveryConfiguration|null,
     *     cloneToRefreshable?: CloneToRefreshableConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
