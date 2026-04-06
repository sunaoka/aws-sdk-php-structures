<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptionGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assetId
 * @property string $assetRevision
 * @property 'GRANT_PENDING'|'REVOKE_PENDING'|'GRANT_IN_PROGRESS'|'REVOKE_IN_PROGRESS'|'GRANTED'|'REVOKED'|'GRANT_FAILED'|'REVOKE_FAILED' $status
 * @property string|null $targetName
 * @property FailureCause|null $failureCause
 * @property \Aws\Api\DateTimeResult|null $grantedTimestamp
 * @property \Aws\Api\DateTimeResult|null $failureTimestamp
 * @property AssetScope|null $assetScope
 * @property Permissions|null $permissions
 */
class SubscribedAsset extends Shape
{
    /**
     * @param array{
     *     assetId: string,
     *     assetRevision: string,
     *     status: 'GRANT_PENDING'|'REVOKE_PENDING'|'GRANT_IN_PROGRESS'|'REVOKE_IN_PROGRESS'|'GRANTED'|'REVOKED'|'GRANT_FAILED'|'REVOKE_FAILED',
     *     targetName?: string|null,
     *     failureCause?: FailureCause|null,
     *     grantedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     failureTimestamp?: \Aws\Api\DateTimeResult|null,
     *     assetScope?: AssetScope|null,
     *     permissions?: Permissions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
