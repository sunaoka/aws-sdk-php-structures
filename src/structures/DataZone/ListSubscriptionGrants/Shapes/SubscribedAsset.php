<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptionGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assetId
 * @property string $assetRevision
 * @property AssetScope $assetScope
 * @property FailureCause $failureCause
 * @property \Aws\Api\DateTimeResult $failureTimestamp
 * @property \Aws\Api\DateTimeResult $grantedTimestamp
 * @property 'GRANT_PENDING'|'REVOKE_PENDING'|'GRANT_IN_PROGRESS'|'REVOKE_IN_PROGRESS'|'GRANTED'|'REVOKED'|'GRANT_FAILED'|'REVOKE_FAILED' $status
 * @property string $targetName
 */
class SubscribedAsset extends Shape
{
    /**
     * @param array{
     *     assetId: string,
     *     assetRevision: string,
     *     assetScope?: AssetScope,
     *     failureCause?: FailureCause,
     *     failureTimestamp?: \Aws\Api\DateTimeResult,
     *     grantedTimestamp?: \Aws\Api\DateTimeResult,
     *     status: 'GRANT_PENDING'|'REVOKE_PENDING'|'GRANT_IN_PROGRESS'|'REVOKE_IN_PROGRESS'|'GRANTED'|'REVOKED'|'GRANT_FAILED'|'REVOKE_FAILED',
     *     targetName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
