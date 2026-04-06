<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateSubscriptionGrantStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string $assetIdentifier
 * @property 'GRANT_PENDING'|'REVOKE_PENDING'|'GRANT_IN_PROGRESS'|'REVOKE_IN_PROGRESS'|'GRANTED'|'REVOKED'|'GRANT_FAILED'|'REVOKE_FAILED' $status
 * @property Shapes\FailureCause|null $failureCause
 * @property string|null $targetName
 */
class UpdateSubscriptionGrantStatusRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     identifier: string,
     *     assetIdentifier: string,
     *     status: 'GRANT_PENDING'|'REVOKE_PENDING'|'GRANT_IN_PROGRESS'|'REVOKE_IN_PROGRESS'|'GRANTED'|'REVOKED'|'GRANT_FAILED'|'REVOKE_FAILED',
     *     failureCause?: Shapes\FailureCause|null,
     *     targetName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
