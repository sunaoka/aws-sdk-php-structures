<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PeerDomainArn
 * @property 'PRIMARY'|'SECONDARY'|null $PeerRole
 * @property 'PENDING_SETUP'|'ACTIVE'|'SWITCHING_OVER'|'FAILING_OVER'|'PENDING_REMOVAL'|'DETACHED'|'EJECTED'|'FAILED'|null $Status
 * @property string|null $StatusMessage
 */
class ReplicationPeer extends Shape
{
    /**
     * @param array{
     *     PeerDomainArn?: string|null,
     *     PeerRole?: 'PRIMARY'|'SECONDARY'|null,
     *     Status?: 'PENDING_SETUP'|'ACTIVE'|'SWITCHING_OVER'|'FAILING_OVER'|'PENDING_REMOVAL'|'DETACHED'|'EJECTED'|'FAILED'|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
