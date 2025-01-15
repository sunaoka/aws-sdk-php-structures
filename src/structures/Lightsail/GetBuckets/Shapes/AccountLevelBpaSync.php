<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetBuckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'InSync'|'Failed'|'NeverSynced'|'Defaulted'|null $status
 * @property \Aws\Api\DateTimeResult|null $lastSyncedAt
 * @property 'DEFAULTED_FOR_SLR_MISSING'|'SYNC_ON_HOLD'|'DEFAULTED_FOR_SLR_MISSING_ON_HOLD'|'Unknown'|null $message
 * @property bool|null $bpaImpactsLightsail
 */
class AccountLevelBpaSync extends Shape
{
    /**
     * @param array{
     *     status?: 'InSync'|'Failed'|'NeverSynced'|'Defaulted'|null,
     *     lastSyncedAt?: \Aws\Api\DateTimeResult|null,
     *     message?: 'DEFAULTED_FOR_SLR_MISSING'|'SYNC_ON_HOLD'|'DEFAULTED_FOR_SLR_MISSING_ON_HOLD'|'Unknown'|null,
     *     bpaImpactsLightsail?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
