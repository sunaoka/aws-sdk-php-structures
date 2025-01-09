<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetBuckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'InSync'|'Failed'|'NeverSynced'|'Defaulted' $status
 * @property \Aws\Api\DateTimeResult $lastSyncedAt
 * @property 'DEFAULTED_FOR_SLR_MISSING'|'SYNC_ON_HOLD'|'DEFAULTED_FOR_SLR_MISSING_ON_HOLD'|'Unknown' $message
 * @property bool $bpaImpactsLightsail
 */
class AccountLevelBpaSync extends Shape
{
    /**
     * @param array{
     *     status?: 'InSync'|'Failed'|'NeverSynced'|'Defaulted',
     *     lastSyncedAt?: \Aws\Api\DateTimeResult,
     *     message?: 'DEFAULTED_FOR_SLR_MISSING'|'SYNC_ON_HOLD'|'DEFAULTED_FOR_SLR_MISSING_ON_HOLD'|'Unknown',
     *     bpaImpactsLightsail?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
