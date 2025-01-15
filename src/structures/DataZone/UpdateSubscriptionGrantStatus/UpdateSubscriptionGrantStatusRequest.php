<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateSubscriptionGrantStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetIdentifier
 * @property string $domainIdentifier
 * @property Shapes\FailureCause|null $failureCause
 * @property string $identifier
 * @property 'GRANT_PENDING'|'REVOKE_PENDING'|'GRANT_IN_PROGRESS'|'REVOKE_IN_PROGRESS'|'GRANTED'|'REVOKED'|'GRANT_FAILED'|'REVOKE_FAILED' $status
 * @property string|null $targetName
 */
class UpdateSubscriptionGrantStatusRequest extends Request
{
    /**
     * @param array{
     *     assetIdentifier: string,
     *     domainIdentifier: string,
     *     failureCause?: Shapes\FailureCause|null,
     *     identifier: string,
     *     status: 'GRANT_PENDING'|'REVOKE_PENDING'|'GRANT_IN_PROGRESS'|'REVOKE_IN_PROGRESS'|'GRANTED'|'REVOKED'|'GRANT_FAILED'|'REVOKE_FAILED',
     *     targetName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
