<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\GetPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $rtoInMinutes
 * @property int<0, max>|null $rpoInMinutes
 * @property 'ACTIVE_ACTIVE'|'HOT_STANDBY'|'WARM_STANDBY'|'PILOT_LIGHT'|'BACKUP_AND_RESTORE'|null $disasterRecoveryApproach
 */
class MultiAzTargets extends Shape
{
    /**
     * @param array{
     *     rtoInMinutes?: int<0, max>|null,
     *     rpoInMinutes?: int<0, max>|null,
     *     disasterRecoveryApproach?: 'ACTIVE_ACTIVE'|'HOT_STANDBY'|'WARM_STANDBY'|'PILOT_LIGHT'|'BACKUP_AND_RESTORE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
