<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateSubscriptionGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assetId
 * @property string $assetRevision
 * @property AssetScope|null $assetScope
 * @property FailureCause|null $failureCause
 * @property \Aws\Api\DateTimeResult|null $failureTimestamp
 * @property \Aws\Api\DateTimeResult|null $grantedTimestamp
 * @property 'GRANT_PENDING'|'REVOKE_PENDING'|'GRANT_IN_PROGRESS'|'REVOKE_IN_PROGRESS'|'GRANTED'|'REVOKED'|'GRANT_FAILED'|'REVOKE_FAILED' $status
 * @property string|null $targetName
 */
class SubscribedAsset extends Shape
{
    /**
     * @param array{
     *     assetId: string,
     *     assetRevision: string,
     *     assetScope?: AssetScope|null,
     *     failureCause?: FailureCause|null,
     *     failureTimestamp?: \Aws\Api\DateTimeResult|null,
     *     grantedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     status: 'GRANT_PENDING'|'REVOKE_PENDING'|'GRANT_IN_PROGRESS'|'REVOKE_IN_PROGRESS'|'GRANTED'|'REVOKED'|'GRANT_FAILED'|'REVOKE_FAILED',
     *     targetName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
